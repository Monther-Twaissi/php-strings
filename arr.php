<html>
<body>

<?php

//Question no.1
$exercise1 = 'class A  coding academy by Orange';
echo "<br>";
// the original string
echo $exercise1;
echo "<br>";
// a) transform a string all uppercase letters
echo strtoupper ( $exercise1 ) ;
echo "<br>";
// b) transform a string all lowercase letters.
echo strtolower ( $exercise1 ) ;
echo "<br>";
// c) make a string's first character uppercase.
echo ucfirst ( $exercise1 ) ;
echo "<br>";
//d) make a string's first character of all the words uppercase.
echo ucwords   ( $exercise1 ) ;
echo "<br>";
//Question 2
$exercise2 = "082307";
$exercise2Arr = str_split($exercise2, "2");
$newExercise2 = implode(":", $exercise2Arr);
echo $newExercise2."<br>";
//Question 3
$exercise3 = 'he quick brown fox jumps over the lazy dog';
if(strchr($exercise3,"jumps"))
{
    echo 'The word exist in the sentence'."<br>";
}
else {
    echo 'the word don\'t exist in the sentence'."<br>";
}
//Question 4
$path = 'www.example.com/public_html/index.php';
$exercise4 = substr(strrchr($path, "/"), 1);
echo $exercise4."<br>";
//Question number 5
echo strtok("Orange@example.com", "@");
echo"<br>";
//Question no.6
// the original string
$exercise6 ='Orange@example.com';
echo  substr($exercise6 ,-3)."<br>";
echo "<br>";
//Question 7
function passwordEncrypt($exercise7)
{
    $password = "ewf465e4wafweafd46weq8fdwqe56f";
    return substr(str_shuffle($password), 0, $exercise7);
}
echo passwordEncrypt(8)."<br>";
//Question 8
$exercise8 =  'the quick brown fox jumps over the lazy dog';
echo str_replace('the', 'That',$exercise8)."<br>";
//Question 9
$exercise9A = 'football';
$exercise9B = 'footboll';
$str_pos = strspn($exercise9A ^ $exercise9B, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $exercise9A[$str_pos], $exercise9B[$str_pos])."<br>";
//Question number 10
$exercise10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$exercise10Arr = explode("\n", $exercise10);
var_dump($exercise10Arr)."<br>";
//Question no.11
// the original string
$charactar = 'z';
$next_charactar = ++$charactar;
if (strlen($next_charactar) > 1)
{
    $next_charactar = $next_charactar[0];
}
echo $next_charactar."<br>";
//Question 12
$exercise12 = 'orange@example.com';
echo substr($exercise12, 6)."<br>";
//Question 13
$exercise13 = 'The brown fox';
echo  substr_replace($exercise13, 'quick ', 4, 0)."<br>";
//Question 14
echo substr("The quick brown fox",0,3)."<br>";
//Question number 15
echo ltrim("000547023.24", "0")."<br>";
//Question no.16
// the original string
$sub_string = 'fox';
$exercise16 = 'The quick brown fox jumps over the lazy dog';
if (substr($exercise16, 0, strlen($sub_string)) == $sub_string)
{
    $exercise16 = substr($exercise16, strlen($sub_string));
}
echo $exercise16."<br>";
//Question no.17
// the original string
$exercise17 ='The quick brown fox jumps over the lazy dog///';
echo  trim($exercise17 , '///')."<br>";
//Question 18
$exercise18 = 'http://www.example.com/5478631';
echo substr($exercise18, strrpos($exercise18, '/' )+1)."<br>";
//Question 19
$exercise19 = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $exercise19)."<br>";
//Question number 20
$exercise20 = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $exercise20), 0, 5))."<br>";
//Question no.21
$string21 = '2,543.12' ;
$number = array(",");
$onlyconsonants = str_replace($number,"" ,"2,543.12");
echo ($onlyconsonants)."<br>";
//Question number 22
echo str_replace(",", "", "2,543.12")."<br>";
?>
</body>
</html>