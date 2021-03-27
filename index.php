<?php
   include 'connection.php';

   if(isset($_POST['save'])) {
        $fullname = $_POST['fullname'];
        $id = $_POST['id'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO students(id, fullname, semester)
                VALUES('$id', '$fullname', '$semester')";

        if (!($conn->query($sql) === TRUE)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }

   $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Insert Users</title>
</head>
<body>
    
    <!-- Main Container -->
    <div class="main-container container py-5 px-3">

        <h1 class="bg-warning text-center pt-2 pb-3 px-2 mb-5">Insert Student Info</h1>

        <form method="POST" class="bg-dark text-light py-5 px-4">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-5">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester">
            </div>      
            <button type="submit" name="save" class="btn btn-warning w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>