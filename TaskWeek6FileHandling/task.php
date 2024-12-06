<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['image'];

    $prob = $image['name'];
    $idx = strpos($prob, ".");
    $prob = substr($prob, $idx + 1);

    $is_valid = false;

    try {
        if (!in_array($prob, ["jpg", "jpeg", "gif", "png"]) || $image['size'] >= 1048576) {
            throw new Exception("Invalid file type or file too large (max 1MB).");
        } else {
            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }
            move_uploaded_file($image['tmp_name'], "uploads/" . $image['name']);
            $is_valid = true;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    global $users;
    if ($is_valid) {
        $users["user1"] = [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ];
        $jsonData = json_encode($users);
        file_put_contents('database.json', $jsonData);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form action="database.json" method="post" enctype="multipart/form-data">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br><br>

    <input type="submit" value="Send">
</form>
</body>
</html>
