<?php
// loops are for ,while,while-each,
//concepts semain remain
$lan=array(1,2,3,4,5,6);
//printing values of lan
$i=0;
while($i<=5){
    echo " $lan[$i]";
    $i++;
}
//do while 
$a=20;
do{
    echo"\n it will run one time only\n ";

}while($a<=5);

//for loop
for($a=20;$a>=0;$a--){
echo " $a";}
//for each loop syntax
// no need for inc or decrement only array name has to be given and the body because each is already being there
echo"\n";
foreach( $lan as $value ){
    echo " $value ";

}

?>