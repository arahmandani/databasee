<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
require_once("koneksi.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       
<title>SELAMAT DATANG DI GARIZ MAYA </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.10.1.min.js"></script>
<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
                <script type="text/javascript">
function awas(){
    alert("Anda berada di Gariz Maya Sistem");
}
</script>
<script type="text/javascript">
function reloadkode(){
$("#random").html('....');
$("#random").load('random.php');
}
$(function(){
reloadkode();
})
</script>
</head>
<body style="background-image: url('image/Koala.jpg');">
    
<center>
<form action="proseslogin.php" method="post" id="form_wrapper" class="form_wrapper"> 
						<h3>LOGIN FORM</h3>
						<div>
							<label>Username:</label>
							<input type="text"  name="username"/>
							
							</div>
						<div>
							<label>Password:</label>
							<input type="password" name="password">
                                                        <br>
						</div>
                                                <div>
                                                 
                                               <label>Masukan kode ini </label>
          
                                                <img src='captcha.php'  />  
                                                <br>
                                                         <input type="text" name="kode" size='5' maxsize='5' />
                                                         <a href="javascript:reloadkode();">Reload Kode</a>
                                                         <br>
                                                         
                                                </div>
                                                       <div class="bottom">     
                                                   <td>
                                                       <input type="submit"  name="captcha" value="Submit" onclick=awas()></input>
							<tr><input type="reset" value="Batal"></input></tr>
                                                    </td>
                                                    <input type="checkbox" value="Simpan" id="save">Simpan</input>
							
							<div class="clear"></div>
						</div>
					</form>


</center>
    </body>
    <!--implement-captcha.php-->  

</html>
