<?php
        echo " hello world";echo " \n";
        ?>
<?php
$var1 = 89;
$var2 =" yashmala ";
// the language is not case sensitive
//there is no need of datatype for variable declaration
// echo doesn't gives a new line

echo "$var1";echo " \n";
//\n for line breaks
echo "$var2";
$var2=90;
// arithmetic operators 

echo "$var1 + $var2";// this will give the value as it is 
echo "\n addition ";
echo $var1 + $var2;// this will provide the addition
echo "\nsubtraction ";
echo $var1 - $var2;

echo "\n mutipication ";
echo $var1 * $var2;
echo "\n division ";
echo $var1 / $var2;

// assignment operator 
echo " <h1> trials <h1/>";// tags not working in php and vice versa
$var4="yashmala";
$var3=$var4;
$var5=$var2;
$var5+=1;
$var5-=3;
$var5*=4;
$var5/=6;
// comparison operators all types of comparison operators
// they will return boolean values
echo" trial";
echo 4<5;// it will return bool values
echo 4; // simple printing values
echo"\n checking the type of variable ";
echo var_dump(4==4.00);
echo "\n $var4";
// pre and post inc/dec operator
echo ++$var1;
echo"\n";
echo $var1++;
echo"\n";
echo --$var1;
echo"\n";
echo $var1--;
echo $var1;
echo"logical operator";
$n1=(true and false);
$n2=(true or false);
$n3=(true xor false);
echo "  $n1 $n2 $n3 \n";
echo var_dump($n1,$n2,$n3);




?>
   



