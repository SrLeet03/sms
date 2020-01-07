<?php
error_reporting(-1);

$conn = mysqli_connect('localhost', 'root', '', 'sms');

$sql = "SELECT * FROM files1";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

session_start();
// Uploads files
if (isset($_POST['save'])) { 
   // session_start();
    $self_ID = $_SESSION['id'];
    $filename = $_FILES['myfile']['name'];

    $extension = pathinfo($filename,PATHINFO_EXTENSION);
$destination = 'uploads/'.$filename;
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','png'])) {
        echo  "<script>alert('extension must be zip, pdf, docs, png');</script>";
    } elseif ($_FILES['myfile']['size'] > 1000000) {
        echo  "<script>alert('file is too large.');</script>";
    } 
    else {
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files1 (name, size, downloads, userID) VALUES ('$filename', $size, 0, $self_ID)";
            if (mysqli_query($conn, $sql)) {
                echo  "<script>alert('file uploaded succsesfully !!.');</script>";
            }
        } else {
            echo  "<script>alert('Failed to upload file.');</script>";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    $sql = "SELECT * FROM files1 WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/'.$file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files1 SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>