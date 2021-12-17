<!-- <?php
	$books = [
		['name'=>'The Far Field', 'author'=>'Madhuri Vijay', 'price'=>20],
		['name'=>'The 2 States', 'author'=>'Chetan Bhagat', 'price'=>18],
		['name'=>'Selection Day', 'author'=>'Arvind Adiga', 'price'=>25],
		['name'=>'MALGUDI DAYS', 'author'=>'R.K. NARAYAN', 'price'=>20],
		['name'=>'FASTING,FEASTING ','author'=>'ANITA DESAI', 'price'=>20]
			];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BOOKS</title>
	<h1>Indian Authors</h1>
	<?php foreach ($books as $book) { ?>
		<h2><?php echo $book['name'] . ' Written By ' .$book['author']; ?></h2>

		<p>$ <?php echo $book['price'];?></p>
	<?php }?>
</head>
<body>
	
</body>
</html> -->
<?php 
extract($_REQUEST);
if(isset($check))
{
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first $n numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < $n-2 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
		<table>
		<tr>
		<td>Enter Your Number</td>
		<td><input type="text" name="n" required/></td>
		</tr>
		<td colspan="2" align="center">
			<input type="submit" value="Print Fibonacci Series" name="check"/>
		</tr>
		</form>
	</body>
</html>
</html>