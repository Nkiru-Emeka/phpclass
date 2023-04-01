<?php
/* Learning first method to create numeric arrays*/
$number = array(1,2,3,4,5);
foreach($number as $value)
{
    
    /*echo "This is the result on how to create Numeric Array". "<br/>";*/
    echo "The result is $value <br/>";
}

/* Learning second method to create numeric Array*/
$numbers[0]="One";
$numbers[1]="Two";
$numbers[2]="Three";
$numbers[3]="Four";
$numbers[4]="Five";
foreach($numbers as $value)
{
    /*echo "This is the result on how to create Numeric Array". "<br/>";*/
    echo "The result is $value <br/>";
}

/*first method to create Associatve Array
 */
$salary= array(
    "chime"=>2000,
    "rita"=>1000,
    "grace"=>500,
);
    echo "This is the result on how to create Associate Array". "<br/>";
    echo "salary of Chime is ". $salary['chime']. "<br/>";
    echo "salary of Rita is ". $salary['rita']. "<br/>";
    echo "salary of Grace is ". $salary['grace']. "<br/>";

    /* second method to create Assciative Array*/

    $salary['chime']="High";
    $salary['rita']="Medium";
    $salary['grace']="Low";

    echo "Salary of Chime is ". $salary['chime']. "<br/>";
    echo "salary of Rita is ". $salary['rita']. "<br/>";
    echo "salary of Grace is ". $salary['grace']. "<br/>";

    /* First method to create multideimentional array 
    to store marks of three students in three subjects*/

    $marks=array('chime'=>array('physics'=>35, 'maths'=>30, 'chemstry'=>39),
     'rita'=>array('physics'=>30, 'maths'=>29, 'chemistry'=>29, 
     'grace'=>array('physics'=>31, 'maths'=>22, 'chemistry'=>39)));

     echo 'score for chime in physics is ' .$marks['chime']['physics'];
?>
