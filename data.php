
<?php
require_once("connection.php");
echo "data.php page<br/>";
$cnt_count=$_POST['cnt_count'];
$table_name=$_POST['table_name'];
echo "cnt_count=$cnt_count<br/>";
$col_name_list=$_POST['col_name_list'];
//echo $col_name_list;
echo "<hr/>";

$cnt_value_list=array();

for($i=0;$i<$cnt_count;$i++)
{
	$cnt_name="cnt_".$i;
	$cnt_value_list[$i]=$_POST[$cnt_name];
}

$value_list =implode("','",$cnt_value_list);
//echo "value_list<br/>$value_list";

$sql="insert into $table_name($col_name_list) values('$value_list' )";


if(mysqli_query($con,$sql))
{
    echo "saved";
}
else
echo "error<br/>$sql";
?>