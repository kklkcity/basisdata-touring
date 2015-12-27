<?php
	// mysqli_connect(HOST, USERNAME, PASSWORD, NAMA DB)
	// @ digunakan untuk melakukan suppress errors
	$conn = @mysqli_connect("localhost","root","","tour");
	// cek koneksinya error atau tidak
	if (mysqli_connect_errno())
	  {
	  // jika error tampilkan pesan error
	  echo "Gagal : " . mysqli_connect_error();
	  }


                                $result = mysqli_query($conn,"SELECT * FROM info");
                                while($data = mysqli_fetch_object($result) ):
                                
                               echo $data->informasi ;
                                endwhile;
                                    

?>


