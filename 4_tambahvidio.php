<?php include('koneksi.php') ;
$id = $_POST['id'];
$title = $_POST['title'];
$category_id = $_POST['category_id'];
$attache = $_POST['attache'];
$thumbnail = $_POST['thumbnail'];

$data = mysqli_query($koneksi,"insert into vidio_tb values('$id','$title','$category_id','$attache','$thumbnail')");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bulma.css">
</head>
<body><div class="container">
    <form action="4_tambahvidio.php" method="POST">
    <div class="field">
        <div class="control">
        <label class="label">id</label>
        <input class="input is-hovered" type="text" size="5" placeholder="masukan id" name="id">
    </div>
    <div class="field"> 
        <div class="control">
        <label class="label">Judul</label>
        <input class="input is-hovered" type="text" size="30" placeholder="masukan judul" name="title">
    </div>
    <div class="field ">
        <div class="control">
        <label class="label">kategory</label>
        <select name="category_id">
            <?php 
            $data = mysqli_query($koneksi,"select * from vidio_tb inner join category_tb");
            while($d = mysqli_fetch_array($data)){ ?>
            <option value="<?php echo$d['category_id'] ?>" class="option"><?php echo$d['name'] ?></option>
            <?php }?>
        </select>
    </div>
    <div class="field ">
        <div class="control">
        <label class="label">attach</label>
        <input class="input is-hovered" type="file" size="30" placeholder="masukan attach" name="attache">
    </div>
    <div class="field ">
        <div class="control">
        <label class="label">thumbnail</label>
        <input class="input is-hovered" type="file" size="4" placeholder="masukan thumbnail" name="thumbnail">
    </div>
    <div class="field">
        <div class="control">
            <input type="submit" class="button is-link" value="save">
        </div>
    </div>
</div>
</form>
</body>
</html>
