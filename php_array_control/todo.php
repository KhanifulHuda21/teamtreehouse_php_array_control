<?php
include 'liste.php';

$status = false;
$field='priority';
$filter = array();
foreach($list as $oryginalKey => $item){
    if($status === 'all' || $item ['complete'] == $status){
        if (isset($field) && isset($item[$field])){
            $filter[$oryginalKey] = $item[$field];
        }else{
            $filter[$oryginalKey] = $item['priority']+12;
        }
        // $filter[$oryginalKey] = $item['priority'];
    }
}
asort($filter);
// echo '<pre>';
// var_dump($filter);
// var_dump($status,boolval('all'),$status == 'all');
// echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';  
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '<tr>';

foreach($filter as $id  => $value){
    echo '<tr>';
    echo '<td>'.$list[$id]['title']."</td>\n";
    echo '<td>'.$list[$id]['priority']."</td>\n"; 
    echo '<td>'.$list[$id]['due']."</td>\n";
    echo '<td>';
    if($list[$id]["complete"]){
        echo "Yes";
    }else{
        echo "No";
    }
    echo '</td>';
    echo '</tr>';
}
echo '</table>';

?>  