<?php

/**
 * 29/09/2020
 * sorting arraay
 */


include "data_siswa.php";

$temp_arr=array();
$filter_form="Magelang";
$filter_next="";


foreach($data_siswa as $value)
{
    if($value[1]==$filter_form && $value[3]==$filter_next )
    {
        if($value[3]){
            $lulus="Lulus";
        }else{
            $lulus="Belum lulus";
        }
            $temp_arr[]=[$value[0],$value[1],$lulus];
    }
}

sort($temp_arr);
print_r($temp_arr);



// $penampung=array();
// $alamat="";
// $lanjut="";

// foreach( $data_siswa as $value){
//     if($value[1]==$alamat || $lanjut){
//         if($value[3]){
//             $lulus="lulus";
//         }else{
//             $lulus="belum lulus";
//         }
//         $penampung[]=[$value[0],$value[1],$lulus];
//     }
// }

// sort($penampung);
// print_r($penampung);



