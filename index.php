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




$array1=Array(
   // Array("ApplicantsID","text",""),
   // Array("PostID","number",""),
    Array("Name","text",""),
    Array("FatherName","text",""),
    Array("Dob","date",""),
    Array("Address","text",""),
    Array("City","text",""),
    Array("Mobile","number",""),
    Array("Mobile1","number",""),
    Array("EmailID","email",""),
    Array("TechnicalSkills","number",""),
    Array("ExpirenceMonths","number",""),
);







    $flag=false;
	
for($i=0;$i<count($array1);$i++  ){
    $label1=$array1[$i][0];
    $type=$array1[$i][1];
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
