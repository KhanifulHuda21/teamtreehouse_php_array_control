<?php

$data=["Ariel","Giring","David"];
$musisi=implode("\n",$data);//Array -> string

echo $musisi;

$musisi_arr=explode("\n",$musisi);// string->array

print_r($musisi_arr);
 
//adding element

array_push($data,"Gesang"); //didepan

array_unshift($data,"Hanif"); // dibelakang 

print_r($data);

//Remove Element

array_pop($data);//remove element from end

array_shift($data);//remove element from beginning

unset($data[0]);//remove element zrrzy index [0]

print_r(array_values($data));//return all array

$color= array("Red","Green","Blue");

//add modification below this line

array_unshift($color,"Yellow");//add yellow to brginning array

array_unshift($color,"Black");//add black to beginning array

array_splice($color,1,1,"Violet");//replace to magenta--------> memngganti

unset($color[3]);//remove element from green ----> untuk menghilangkan

print_r($color);


$iceCream=[
    "ferdi"=>"Sepak Bola",
    "Hanif"=>"Atletik",
    "Rendi"=>"66,9",
    "Masna"=>8,    
    "Rohman"=>true
];

// print_r($iceCream);

$task1=array(
"title"=>"Clean motorcycle",
"Priority"=>"Medium",
"Complete"=>true
);

$task2=array(
    "title"=>"Watch Moved",
    "Priority"=>"Medium",
    "Complete"=>false
    );

    $task3="All task was done !";
    
    $todo=array($task1,$task2,$task3);
    echo $tudo[0]["title"];

    echo PHP_EOL;

    echo $tudo[2];
    





