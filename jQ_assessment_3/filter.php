<?php

//require 'connection.php';
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'product');
$min = $_POST['min'];
$max = $_POST['max'];
$sql="select * from items where age BETWEEN $min AND $max";
$stmnt=$conn->prepare($sql);
if($stmnt->execute())
{
	
	$data=$stmnt->fetchAll();
    echo "<html><body><table><th>Product Key</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Age</th>";
	
	for($i=0;$i<count($data);$i++)
	{
		//echo "<tr>";
        echo "<tr>
                <td>".$data[$i]["itemkey"]."</td>
		        <td>".$data[$i]["itemname"]."</td>
		        <td>".$data[$i]["itemprice"]."</td>
		        <td>".$data[$i]["age"]."</td>
            </tr>";
		echo "<br>";
	}
	echo "</table></body></html>";
}
else
{
	echo "There is Error";
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php"><button>Goto Back</button></a>
</body>
</html>