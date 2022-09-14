<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="container">



<?php
require_once("connection.php");

echo "<form action='data.php' method='post'>";






echo"
<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-primary'>
            <div class='panel-heading'>Personal Details</div>
                <div class='panel-body'>
                


";

$table_name="form";


$q = mysqli_query($con,'DESCRIBE form');
while($row = mysqli_fetch_array($q)) {
//    echo "{$row['Field']} - {$row['Type']}\n";
}
//exit;
/*
$sql="select name,fathername from $table_name";
$query=mysqli_query($con,$sql);
$col_count=mysqli_num_fields($query);
$col_type;
//echo "col count=$col_count";
for($i=0;$i<$col_count;$i++)
{
$temp=mysqli_fetch_field($query);
$type = mysqli_fetch_field_direct($query);
$type_value=$type->type;
$colname[$i]=$temp->name;
echo "$colname=type=$type_value<br/>";
}
exit;



*/
$sql="select name,fathername from $table_name";

if ($result = mysqli->query($sql)) {

    /* Get field information for column 'SurfaceArea' */
    $finfo = $result->fetch_field_direct(1);
 
    printf("Name:     %s\n", $finfo->name);
    printf("Table:    %s\n", $finfo->table);
    printf("max. Len: %d\n", $finfo->max_length);
    printf("Flags:    %d\n", $finfo->flags);
    printf("Type:     %d\n", $finfo->type);
    
    $result->close();
}


exit;

for($i=0;$i<count($colname);$i++)
$array1[$i]=Array($colname[$i],"text","");



/*$array1=Array(
   // Array("ApplicantsID","text",""),
   // Array("PostID","number",""),
     
    Array($colname[0],"text",""),
     Array($colname[1],"text",""),
	    Array($colname[2],"text",""),
     Array($colname[3],"text",""),
	    Array($colname[4],"text",""),
     Array($colname[5],"text",""),
	    Array($colname[6],"text",""),
     Array($colname[7],"text",""),
	    Array($colname[8],"text",""),
     Array($colname[9],"text",""),
	    Array($colname[10],"text",""),
     Array($colname[11],"text",""),
	    Array($colname[12],"text",""),
     Array($colname[13],"text",""),
	    Array($colname[14],"text",""),
     Array($colname[15],"text","")
);


*/




    $flag=false;
	$col_name_list="";
for($i=0;$i<count($array1);$i++  ){
    $label1=$array1[$i][0];
    $type=$array1[$i][1];
	$col_name_list .=$label1;
	if($i<count($array1)-1)
	$col_name_list .=",";
$cnt_name="cnt_".$i;
    if($flag)
        echo"<div class='row'>";
        echo"

        <label class='col-md-3'>$label1 </label>
                            
        <div class='col-md-3'>
            <input class='form-control' name='$cnt_name' type='$type'/>
        </div>
        ";
            
    if($flag){
        echo"</div><br/>";
        $flag=false;
    }
    else 
    $flag=true;

        
}
$count=$i;
echo "<input type='hidden' value='$table_name' name='table_name'/>";
echo "<input type='hidden' value='$col_name_list' name='col_name_list'/>";
echo "<input type='hidden' value='$count' name='cnt_count'/>";
echo"</div>
</div>
</div>
</div>

";

   ?>
   
</div>

<div class='container'>



<?php



echo"
<div class='row'>
    <div class='col-md-12'>
        <div class='panel panel-primary'>
            <div class='panel-heading'>Qualification</div>
                <div class='panel-body'>
";




$array2=Array(
    Array("ID","number",""),
    Array("PostID","number",""),
    Array("Degree_level","text",""),
    Array("Degree","text",""),
    Array("Compulsory","text",""),
    Array("Percentage Required","varchar",""),
    Array("Expirence In Months","number",""),
);







    $flag=false;
	
for($i=0;$i<count($array2);$i++){
    $label2=$array2[$i][0];
    $type1=$array2[$i][1];

    if($flag)
        echo"<div class='row'>";
        echo"

        <label class='col-md-3'>$label2</label>
                            
        <div class='col-md-3'>
            <input class='form-control' type='$type1'/>
        </div>
        ";
            
    if($flag){
        echo"</div><br/>";
        $flag=false;
    }
    else 
    $flag=true;

        
}
echo"</div>
</div>
</div>
</div>

";
?>
<?php

echo"
<div class='row'>
<div class='col-md-5'>
</div>

<div class='col-md-3'><input type='submit' name='save' class='btn btn-info' /></div>

</div>
";



echo "</form>";

?>

</div>
</body>
</html>
