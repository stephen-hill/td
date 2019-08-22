<?

$t=true;
$f=fopen('f', 'c');
$d = require('f');
$d['Next Todo Item'.rand(1,99)]=0;

fwrite($f, '<? return '.var_export($d,$t).';');

$a='<style>label{display:block}</style><form action=/a method=PUT>';

foreach($d as $i=>$j)
{
    $a.=sprintf('<label><input type=checkbox>%s</label>', $i);
}

$a.='<input type=text>';

echo $a.'</form>';
