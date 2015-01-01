<?php
foreach($state_lampu as $lamp){
    if($lamp->state=="true" && $lamp->response=="ERROR"){
        echo "ERROR";
    }else
    if($lamp->state=="true" && $lamp->response=="ON"){
        echo "ON";
    }else
    if($lamp->state=="false"){
        echo "OFF";
    }
}

