
<?php include('koneksi.php') ;

$id = $_GET['id'];

$data2 = mysqli_query($koneksi,"select * from category_tb where id='$id'");


$id = $_POST['id'];
$name = $_POST['name'];
if(isset($_POST['submit'])){  
$data = mysqli_query($koneksi,"update category_tb set id='$id', name='$name' where id='$id'");
header("location:viewkat.php");
}
     while($d = mysqli_fetch_array($data2)){
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
    <form method="POST" action="4_updatekat.php">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <div class="field ">
            <label class="label">id</label>
            <input class="input is-hovered" value="<?php echo $d['id']; ?>" type="text" size="4" placeholder="masukan id" name="id">
        </div>
        <div class="field ">
            <label class="label">nama</label>
            <input class="input is-hovered" value="<?php echo $d['name']; ?>" type="text" size="30" placeholder="masukan nama" name="name">
        </div>
        <div class="field">
            <div class="control">
                <input type="submit" name="submit" class="button is-link" value="submit"> 
                
            </div>
        </div>
     </form><?php } ?>
    </div>
</body>
</html>
