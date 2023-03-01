
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ToDo App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    </head>

<?php
include('config.php');
$ID = $_GET['ID'];
$getdata = mysqli_query($connect, "SELECT * FROM list WHERE id='$ID'");
$row = mysqli_fetch_array($getdata);
?>

    <body>
        <div class="container">
            <h1 class="my-4"><i class="fa-solid fa-list-check"></i> 
                <span class="text-primary">Edit</span> Todo List
            </h1>

            <!-- card -->
                <div class="card shadow p-3 mb-5 bg-body rounded border border-dark">
                    <div class="card-body">
                        <form class="d-flex" action="editdata.php" method="post">
                            <input class="form-control me-2 border-success" 
                            name="data" value="<?php echo $row['data'] ?>" type="text" 
                            placeholder="Apa yang mau kamu lakukan hari ini?">
                            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-plus"></i></button>
                            <input type="hidden" value="<?php echo $row ['id'] ?>" name="id">
                        </form>
                    </div>
                </div>
            <!-- end card -->