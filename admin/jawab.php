<?php
include 'accesscontrol.php'; 
?>
 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <div>
                                        <h4 class="card-title">Konsultasi</h4>
                                        <h5 class="card-subtitle">Lembar pertanyaan dan jawaban</h5> 
<?php  
	 $con=mysqli_connect("localhost", "ikmpurwo_root","sangatrahasi4","ikmpurwo_epi");
$query=mysqli_query($con,"select * from konsultasi where id=$_GET[id]" );
$hasil=mysqli_fetch_array($query);

//echo $hasil[2];

?>
<form name="frmjwb" method="post" action="jawab.php?aksi=jawab&id=<?=$_GET['id'];?>" enctype="multipart/form-data">
<table width="100%" border="0" class="table table-striped table-hover">
  <tbody>
	  <tr>
      <td>Tanggal</td>
      <td>:</td>
      <td><?=$hasil['tanggal'];?></td>
    </tr>
    <tr>
      <td width="7%">Dari</td>
      <td width="5%">:</td>
      <td width="88%"><?=$hasil['nama'];?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?=$hasil['email'];?></td>
    </tr>
    <tr>
      <td>Pertanyaan</td>
      <td>:</td>
      <td><?=$hasil['tanya'];?></td>
    </tr>
    <tr>
      <td>Jawaban</td>
      <td>:</td>
      <td><textarea name="jawaban" rows="5" cols="70"><?=$hasil['jawaban'];?></textarea></td>
    </tr>
    <tr>
      <td>Dijawab oleh</td>
      <td>:</td>
      <td><input type="text" size="40" name="dijawab" value="<?=$hasil['penjawab'];?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" value="Jawab" name="submit" class="btn btn-success"><input type="reset" value="Ulang" name="reset" class="btn btn-warning"><input type="hidden" value="<?=$hasil['id'];?>" name="id"></td>
    </tr>
  </tbody>
</table>
	</form>
										
										<?php
										
if(isset($_GET["aksi"])=="jawab"){
$query=mysqli_query($con,"update konsultasi set jawaban='$_POST[jawaban]', penjawab='$_POST[dijawab]' where id=$_POST[id]" );
	if($query){
		
		 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=lihatinbox.php\">");
	}

										
										}
										
										
										?>
</div>
                                </div>
								</div>
								</div>
								</div>
								</div>