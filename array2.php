<?php 


$score= array(200,300, 20,40 ,500, 'Nkiru', 'Emeka');
//echo $score[0]. '<p>';
foreach ($score as $a) {echo $a. '<br>';}
echo '<p>';
foreach ($score as $a=>$v) {echo $a. '=>'. $v. '<br>';}
echo '<p>';
print_r($score);





?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>