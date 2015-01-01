<?php
echo "#";
foreach($state_lampu as $s){
    if($s->state=="true"){
        echo "1";
    }else{
        echo "0";
    }
}
echo "^";

