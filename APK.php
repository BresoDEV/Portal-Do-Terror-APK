 <?php
 $link = "https://cf96-131-255-160-66.sa.ngrok.io";
$header = @get_headers($link);
if(substr($header[0], 9, 3) == 200)
{
	header("Location: ".$link); exit;
}
else
{
	header("Location: manutencao.php"); exit;
}

?>
	