<?php 
  include('koneksi.php');

// $id = $_GET['id'];
// if(isset($_POST['delete'])){
// mysqli_query($koneksi,"delete from category_tb where id=$id");

// header("location:viewkat.php");}
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="bulma.css">
    
    <script src="2.js"></script>
    <script src="3.js"></script>
    <script src="sd.js"></script>
</head>
<body>
    <header class="header">
        <nav class="navbar is-primary is-fixed">
            <div class="container">
                <div class="navbar-menu">
                <div class="field">
                    <button class="button"><a href="tambahvidio.php" class="navbat-item">Add Video</a></button>
                    <button class="button"><a href="tambahkat.php" class="navbat-item">Add Category</a></button>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <main>
    <a href="tambahkat.php" class="button is-info">tambah</a>
        <div class="container"><?php 
        {
          
          $data = mysqli_query($koneksi,"select * from category_tb");
          while($d = mysqli_fetch_array($data)){
          
          ?>

  

            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"> <?php echo $d['id']; ?> </p>
                <p class="title"> <?php echo $d['name']; ?> </p>
                
                <a href="viewkat.php?id=<?php echo $d['id'];?>" class="button is-danger" name="delete" > hapus</a>
                <a href="updatekat.php?id=<?php echo $d['id'];?>" class="button is-primary " > edit</a>
              </article>
            </div> 
            <?php
        }
      }
      
        
        ?>
       </div>     
    </main>
</body>
</html>