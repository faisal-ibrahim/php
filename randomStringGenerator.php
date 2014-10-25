<?php
/**
 * Created by PhpStorm.
 * User: Faisal
 * Date: 10/25/2014
 * Time: 10:08 PM
 */

function randomStringGenerator($length, $type = '') {
    // Select which type of characters you want in your random string
    switch($type) {
        case 'num':
            // Use only numbers
            $characters = '1234567890';
            break;
        case 'lower':
            // Use only lowercase letters
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            break;
        case 'upper':
            // Use only uppercase letters
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        default:
            // Use uppercase, lowercase, numbers, and symbols
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890*@#$';
            break;
    }
    $rand = '';
    $i = 0;
    while ($i < $length) { // Loop until you have met the length
        $num = rand() % strlen($characters);
        $temp = substr($characters, $num, 1);
//          echo $tmp;
        $rand = $rand . $temp;
        $i++;
    }
    return $rand; // Return the random string
}
$result = randomStringGenerator(rand(7,14), $type = 'num'); // It will show 7 to 14 digit alpha numeric string.
echo $result;
echo "<br>";
echo strlen($result);
?>