<?php
$val = "";  
$currentDateTime  =  date('YmdHis',time());  
$currentDate =  date('Ymd',time());  
$fileName = "ioslog/".$currentDate;
@$data = fopen($fileName,'a+');
$val.= $currentDateTime;  
if($_POST){  
    $val.='|POST'.'|'.$_POST."\n";  
    foreach($_POST as $key =>$value){  
        $val .= '|'.$key.":".$value;  
    }  
}else{  
    $val.='|GET'.'|'.$_GET."\n";  
    foreach($_GET as $key =>$value){  
            $val .= '|'.$key.":".$value;  
        }  
}  
$val.= "\n";  
fwrite($data,$val);
fclose($data);  
?>
