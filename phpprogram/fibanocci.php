<?php
if(isset($_GET['n'])){
        $n1=0;
            $n2=1;
            echo"$n1";
            echo"$n2";
            $n=$_GET['n'];
            $i=0;
            while($i<$n)
            {
                $n3=$n1+$n2;
                echo"\n $n3";
                $n1=$n2;
                $n2=$n3;
                $i=$i+1;
            }
        }
?>