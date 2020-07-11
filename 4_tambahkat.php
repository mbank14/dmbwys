
<?php include('koneksi.php') ;
$id = $_POST['id'];
$name = $_POST['name'];
 

$data = mysqli_query($koneksi,"insert into category_tb values('$id','$name')");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bulma.css">
</head>
<body> <div class="container">
    <form method="POST" action="4_tambahkat.php">
        <div class="field ">
            <label class="label">id</label>
            <input class="input is-hovered" type="text" size="4" placeholder="masukan id" name="id">
        </div>
        <div class="field ">
            <label class="label">nama</label>
            <input class="input is-hovered" type="text" size="30" placeholder="masukan nama" name="name">
        </div>
        <div class="field">
            <div class="control">
                <input type="submit" header="viewkat.php" class="button is-link" value="submit"> 
            </div>
        </div>
</form>
    </div>
</body>
</html>
