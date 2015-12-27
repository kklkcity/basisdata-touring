<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Update</title>
       <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link href="css/jumbotron.css" rel="stylesheet" type="text/css">
    <link href="css/aha.css" rel="stylesheet" type="text/css">
    </head>
<body>
  <div class="container">
        <h4> Update Info</h4>

<?php
      require_once("connection.php"); /* Koneksi Database */
      
      $ID = $_GET['id_info']; /** ambil ID student yang akan diubah **/
      
      if( isset( $_POST['update'] ) ): /* Eksekusi jika ada posting dari form */
        
        /* simpan data yang di-post ke dalam variable */
        
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        
        /* eksekusi query */
        mysqli_query($conn,
          "UPDATE
            info 
          SET 
            nama = '$nama',
            alamat = '$alamat'
             
          WHERE 
            id_info = '$ID'
          ") 
          or die(mysqli_error($conn)); 
              
        echo "<div class='alert alert-info'> Your data has been updated. </div>"; /* notifikasi */
      
      endif;
    ?>

    <?php
      // Ambil data yang akan diubah
      $result = mysqli_query($conn, "SELECT * FROM info WHERE id_info='$ID'");
      $data = mysqli_fetch_object( $result );
    ?>
    
    <form action="" method="POST">
        <label>Nama Tempat : </label>
        <input type="text" value="<?php echo $data->nama ?>" class="form-control" name="nama" />
        <label>Alamat : </label>
        <input type="text" value="<?php echo $data->alamat ?>" class="form-control" name="alamat" />
        <label>Deskripsi : </label>
      <textarea class="form-control" rows="17" name="informasi" disabled> <?php echo $data->informasi ?>  </textarea>
      
              <input type="submit" name="update" value="Update" class="btn btn-info" /> 
        <a href="ikih.php">
            <button type="button" class="btn btn-defaut"> Back </button>
        </a>
    </form> 
    </div>  
</body>
</html>