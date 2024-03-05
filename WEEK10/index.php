<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container my-5">
        <h1>ข้อมูลสมาชิก</h1>
        <div><a href="create_frm.php" class="btn btn-success mb-2">+ข้อมูล</a></div>
        <table class="table table-info table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">email</th>
                    <th scope="col">reg_date</th>
                    <th scope="col" colspan="2">จักการข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                require_once 'connect.php';
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $n = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <th><?=$n ?></th>
                            <td><?= $row['firstname'] ?></td>
                            <td><?= $row['lastname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['reg_date'] ?></td>
                            <td>
                                <a href="update_frm.php?id=<?=$row['id']?>" 
                                onclick="return confirm('Are you sure you want to Edit?');" 
                                class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="Delete.php?id=<?=$row['id']?>" 
                                onclick="return confirm('Are you sure you want to Delete?');" 
                                class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                        $n++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
