<?php



class usersMod extends dbh {
    // Method to check if a user exists by email or username
    private function userExists($email, $username) {
        $sql = "SELECT * FROM users_db WHERE email_address = ? OR users_ref_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $username]);
        return $stmt->fetch();
    }

    // Method to register a new user
    protected function register($email, $username, $password, $image, $phone) {
        // Check for empty fields
        if (empty($email) || empty($username) || empty($password) || empty($image['name'])) {
            return 'All fields are required';
        }

        // Check if user already exists
        if ($this->userExists($email, $username)) {
            return 'User already exists';
        }

        // Handle image upload
        $imagePath = $this->uploadImage($image,$username);
        if ($imagePath  !== $username . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION))) {
            return $imagePath;
        }

        // Hash the password
        $hashedPassword = password_hash($password,PASSWORD_ARGON2I);

        // Insert the new user into the database
        $sql = "INSERT INTO users_db (email_address, users_ref_name, user_passw0rd, user_image,user_phone_no) VALUES (?, ?, ?, ?,?)";
        $stmt = $this->connect()->prepare($sql);

        if ($stmt->execute([$email, $username, $hashedPassword, $imagePath, $phone])) {
            return 'User registered successfully';
        } else {
            return 'Error registering user';
        }
    }

    // Method to log in a user
    protected function login($email, $password) {
        // Check for empty fields
        if (empty($email) || empty($password)) {
            return 'Email and password are required';
        }

        // Check if user exists
        $user = $this->userExists($email, $email);
        if (!$user) {
            return 'User does not exist';
        }

        // Verify the password
        if (password_verify($password, $user['user_passw0rd'])) {
            // Start a session and store user data
            session_start();
            $_SESSION['user_id'] = $user['users_id'];
            $_SESSION['username'] = $user['users_ref_name'];
            $_SESSION['image'] = $user['user_image'];
            $_SESSION['mail']  = $user['email_address'];
            return 'Login successful';
        } else {
            return 'Incorrect password';
        }
    }

    // Method to handle image upload
   private function uploadImage($image, $username) {
    $targetDir = "../users/users-image/{$username}";

    // Check if directory exists, if not create it
    if (!is_dir($targetDir)) {
        if (!mkdir($targetDir, 0755, true)) {
            return 'Failed to create directories.';
        }
    }

    $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
    $imgPath = $username . "." . $imageFileType;
    $targetFile = $targetDir . "/" . $imgPath;
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    // Check if the file is an actual image
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
        return 'File is not an image.';
    }

    // Check file size (limit to 5MB)
    if ($image["size"] > 5000000) {
        return 'File is too large. Maximum size is 5MB.';
    }

    // Check file format
    if (!in_array($imageFileType, $allowedTypes)) {
        return 'Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.';
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($image["tmp_name"], $targetFile)) {
        return $imgPath;
    } else {
        return 'Failed to upload the image.';
    }
}

}


