<?php
if(!empty($_POST['Tu']))
{
        $x = $_POST['Tu'];
        echo str_replace("/","-",$x).'<br>';
        $date = date_create($x);
        echo date_format($date, "M-d-Y");
}
else{
    echo "Nhap vao text";
}

