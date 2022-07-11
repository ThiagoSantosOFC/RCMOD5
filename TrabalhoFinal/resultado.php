
<?php 
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $operacao = $_POST['operacao'];

    function soma($num1, $num2){
        return $num1 + $num2;
    }

    function maior($num1, $num2){
        if($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }

    function menor($num1, $num2){
        if($num1 < $num2){
            return $num1;
        }else{
            return $num2;
        }
    }
    
    echo "Inserirdo: ".$num1." e ".$num2."<br />";
    
    if($operacao == "soma"){
        echo "Soma: ".soma($num1, $num2);
    }else if($operacao == "maior"){
        echo "Maior: ".maior($num1, $num2);
    }else if($operacao == "menor"){
        echo "Menor: ".menor($num1, $num2);
    }
?>