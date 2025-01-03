<?php
echo "hello welcome to the php world";
echo "<br> Arrays";
$arr = array(1, 2, 3, 4, 5, 6, 7);
echo "<br> ".$arr[0];
 $arr2 = [7, 2, 3, 4];
 echo "<br> ".$arr2[0];

//Associative arrays

$favCol = array(
'Adi' => 'black',
'Subham' => 'red'
);

foreach ($favCol as $key => $value){
    echo '<br>this is key : '.$key;
    echo '<br>this is value : '.$value;
}
// accessing through index in associative arrays index can be anything unlike arrays where index is integer only
echo '<br>'.$favCol['Adi'];
 
echo '<br>';

echo "<br> Multidimensional arrays";
$multiDam = array(
    array(1, 3, 5, 7),
    array(11, 13, 15, 17),
    array(21, 23, 25, 27),
    array(31, 33, 35, 37)
);

// echo '<br>'.$multiDam[1][3];
// echo '<br>'.var_dump($multiDam);

// for($i = 0; $i< count($multiDam); $i++ ){
//     for($j = 0; $j<count($multiDam[$i]); $j++){
//         echo '<br>'.$multiDam[$i][$j];
//     }
// }

// Outer loop for rows
echo '<br>';
for ($i = 0; $i < count($multiDam); $i++) {
    // Inner loop for columns
    for ($j = 0; $j < count($multiDam[$i]); $j++) {
        echo $multiDam[$i][$j] . " ";
    }
    echo "<br>"; // Newline after each row
}















?>