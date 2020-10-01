<?php
$array=array(
    57=>"on heinz ketchup bottles represents the number of varieties",
    2=>"is the approximate ",
    69=>"muhammad ferdiansyah",
    18=>"reza aditya",
    10=>"zainuddin basyar",
    11=>"indonesia",
    98=>"merdeka",
    69=>"jepara kota",
);

for($x=1;$x<=100;$x++){
    if(isset($array[$x])){
        echo $x." ";
        echo $array[$x];
    }else{
        echo $x.PHP_EOL;
    }
}

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '<th><ti>';
echo '</tr>';




