<!DOCTYPE html>
<html>
<head>
	<title>Peminat</title>
</head>
<body>
<form method="" action="">

   <center>
    <label><font color="blue">ID</font></label><br>
	<input type="text" id="ID" onkeyup="isi_otomatis()" autocomplete="off" autofocus="on" required="on"> <br>

	<label><font color="blue">Tipe</font></label><br>
	<input type="text" id="Tipe" autocomplete="off"> <br>

	<label><font color="blue">Peminat</font></label><br>
	<input type="text" id="Peminat" autocomplete="off"> <br>

	<label><font color="blue">Harga</font></label><br>
	<input type="text" id="Harga" autocomplete="off"> <br>

	

    
   </center>

</form>
</body>
</html>
<!-- ajax untuk menampilkan data otomatis -->
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript">
  function isi_otomatis(){
  var ID = $("#ID").val();
    $.ajax({
    url: 'ajax_isiotomatis.php',
    data:"ID="+ID ,
    })
    .success(function (data) {
    var json = data,
    obj = JSON.parse(json);
    $('#Tipe').val(obj.Tipe);
    $('#Peminat').val(obj.Peminat);
    $('#Harga').val(obj.Harga);
   
    });
}
</script>
<!-- isi_otomatis -->