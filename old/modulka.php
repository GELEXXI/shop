<?php
require('sub.php');
if (!empty($user)) {
    echo 'name : '. $user['name'].'<br>'.' age : '.$user['age'].'<br>'.' phone : '.$user['phone'][0].','.$user['phone'][1];
}
echo '<hr>';

$asoc_arr = array();
$asoc_arr = [
    'name' => 'Tony',
    'firstname'=>'Stark',
    'age'=>40
];

echo $asoc_arr['name'].'<br>'.$asoc_arr['firstname'].'<br>'.$asoc_arr['age'];

echo '<hr>';

$inter = 1;

while ($inter <=100)
{
    echo $inter.' ';
    if ($inter % 10 == 0)
    {
        echo ' <br>';
    }

    $inter ++;

}
echo '<hr>';

$list = array();
$i = 0;
while ($i<5)
{
    $list[]=$i*2;
    $i++;
}
$j = 0;
while ($j<5)
{
    echo $list[$j].'<br>';
    $j++;
}

echo '<hr>';

foreach ($arr as $key)
{
    echo $key.'<br>';
}
echo '<hr>';
foreach ($asoc_arr as $key=>$value)
{
    echo $key.' : '.$value.'<br>';
}


$masiv = [];

for ($i=1 ; $i <= 10;$i++)
{
    $masiv[] = $i;

}
foreach ($masiv as $ii)
{
    echo $ii.'<br>';
}

$emt = 0;
if (isset($emt))
{
    echo "<h1>hello $emt";
}
else
{
    echo 'nema ';
}

echo '<hr>';

$lang = 'ua';
switch ($lang)
{
    case 'ru':
        echo '<h3>russian text</h3>';
        break;
    case  'ua':
        echo '<h3>ukraine text</h3>';
        break;
    case  'en':
        echo '<h3>english text </h3>';
}

foreach ($masiv as $ak)
{
    ?>
    <p>{<?php echo $ak ?>}</p>

    <?php

}

echo '<hr>';

$stri = '  gelexxi@gmail.com Games s' ;
echo strtolower($stri).'<br>';
echo lcfirst($stri).'<br>';
echo ucwords($stri).'<br>';
echo strtoupper($stri).'<br>';
echo trim($stri).'<br>';
echo '<hr>';
echo array_sum($masiv).'<br>';
echo array_product($masiv).'<br>';

var_dump(array_values($masiv));
echo '<hr>';
$keys = ['a' , 'b', 'c', 'd', 'e'];
$elems = [1, 2, 3, 4, 5];

$result = array_combine($keys, $elems);
var_dump($result);
