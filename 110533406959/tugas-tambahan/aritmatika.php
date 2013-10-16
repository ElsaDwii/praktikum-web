<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi Aritmatika</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="angka1" value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : '' ; ?>"/>
		<select name="operasi">
<option value="+"
<?php if (isset($_POST['operasi']) && $_POST['operasi']=='+') {
				echo "selected";
			} ?>
>+</option>
<option value="-"
<?php if (isset($_POST['operasi']) && $_POST['operasi']=='-') {
				echo "selected";
			} ?>
>-</option>
<option value="*"
<?php if (isset($_POST['operasi']) && $_POST['operasi']=='*') {
				echo "selected";
			} ?>
>*</option>
<option value="/"
<?php if (isset($_POST['operasi']) && $_POST['operasi']=='/') {
				echo "selected";
			} ?>
>/</option>
</select><input type="text" name="angka2" value="<?php 
echo isset($_POST['angka2']) ? $_POST['angka2'] : '' ; 
?>"/>

<?php		
if($a=0){
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
}
else
{
	$angka1 = "0";
	$angka2 = "0";
}
if(isset($_POST['operasi']))
{
	$operasi =$_POST['operasi'];
}
else
{
	$operasi = "";
}

switch($operasi){
case "+":
	$hasil = $_POST["angka1"] + $_POST["angka2"];
			
break;
			
case "-":
				
	$hasil = $_POST["angka1"] - $_POST["angka2"];
			
break;
			
case "*":
				
	$hasil = $_POST["angka1"] * $_POST["angka2"];
			
break;
			
case "/":
				
	$hasil = $_POST["angka1"] / $_POST["angka2"];
			
break;

}
?>

<input type = "submit" name = "samadengan" value="=" />
<input type="text" name="hasilnya" value="<?php echo "$hasil"; ?>">


</form>
</body>
</html>