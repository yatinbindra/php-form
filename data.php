
<?php
require_once("connection.php");
echo "data.php page<br/>";
$cnt_count=$_POST['cnt_count'];
echo "cnt_count=$cnt_count<br/>";

$cnt_value_list=array();
for($i=0;$i<$cnt_count;$i++)
{
	$cnt_name="cnt_".$i;
	$cnt_value_list[$i]=$_POST[$cnt_name];
}

for($i=0;$i<$cnt_count;$i++)
{
	echo "i=".$cnt_value_list[$i]."<br/>";
}
//$sql="insert into form(ApplicantsID) values('$user_name')";
//echo $sql;
exit;
if(mysqli_query($con,$sql))
{
    echo "saved";
}
else
echo "error<br/>$sql";
?>