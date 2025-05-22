<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Check if images folder exists; if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is an actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Upload Profile Image</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-3">
        <label for="image" class="form-label">Select image to upload:</label>
        <input type="file" name="image" id="image" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-3">Upload Image</button>
    </form>
    <a href="about.html" class="btn btn-secondary">Back to About Me</a>
</body>
</html>
