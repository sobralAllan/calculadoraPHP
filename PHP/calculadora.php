<?php
    //Aqui escrevo TODO o código PHP
    $num1 = 50;
    $num2 = 69;
    $a = 1;
    $b = -8;
    $c = 12;
    $decimal = 0;
    $binario = 0;
    $decimal = 0;
    $n = 1000;
    $q = 1;
    $r = 0;

    //Operações
    function soma($num1, $num2){
        return $num1 + $num2;
    }//fim da função

    function subtracao($num1, $num2){
        return $num1 - $num2;
    }//fim da função

    function divisao($num1, $num2){
        if($num2<=0){
            return "Impossível dividir por zero!";
        }
        return $num1 / $num2;
    }//fim da divisão

    function multiplicacao($num1, $num2){
        return $num1 * $num2;
    }//fim da multiplicação

    function potencia($num1, $num2){
        return $num1 ** $num2;
    }//fim da potência

    function tabuada($num2){
        $msg  = "";
        for($i = 0; $i <= 10; $i++){
            $msg .= " <br>  $i x $num2 = ".($i * $num2);
        }//fim do for
        return $msg;
    }//fim da tabuada

    function raiz($num1){
        return sqrt($num1);
    }//fim da raiz

    function calcularDelta($a, $b, $c){
        $delta = ($b ** 2 ) - (4 * $a * $c);
        return $delta;
    }//fim do delta

    function calcularX1($a, $b, $c){
        $del = calcularDelta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o X1, pois o delta é negativo!";
        }else{
            $x1 = (-$b + sqrt($del))/(2 * $a);
            return $x1;
        }//fim do if else
    }//fim do calcularX1

    function calcularX2($a, $b, $c){
        $del = calcularDelta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o X1, pois o delta é negativo!";
        }else{
            $x2 = (-$b - sqrt($del))/(2 * $a);
            return $x2;
        }//fim do if else
    }//fim do calcular

    function binarioDecimal($binario){
        $tamanho = strlen($binario);
        $contador = $tamanho - 1;
        for($i = 0; $i < $tamanho; $i++){
            if(substr($binario,$i,1) == 1){
                $decimal += pow(2,$contador);
            }
            $contador--;
        }//fim do for
        return $decimal;
    }//fim do binário para decimal

    function decimalBinario($decimal){
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        };
        return $binario;
    }//fim do binário para decimal

    function fibonacci($n){
        $ant = 0;
        $pro = 1;
        $res = 0;
        $msg = $ant." ".$pro;
        for($i = 0; $i <= $n; $i++){
            $res = $ant + $pro;
            $msg .= " ".$res;
            $ant = $pro;
            $pro = $res; 
        }
        return $msg;
    }

    function converter($valor){
        switch($valor){
            case 10:
                return "A";
                break;
            case 11:
                return "B";
                break;
            case 12:
                return "C";
                break;
            case 13:
                return "D";
                break;
            case 14:
                return "E";
                break;
            case 15:
                return "F";
                break;
            default:
                return "Erro";
                break;
        }
    }//fim do converter

    function converterDois($valor){
        switch($valor){
            case "A":
                return 10;
                break;
            case "B":
                return 11;
                break;
            case "C":
                return 12;
                break;
            case "D":
                return 13;
                break;
            case "E":
                return 14;
                break;
            case "F":
                return 15;
                break;
            default:
                return $valor;
                break;
        }
    }//fim do converter

    //Exercício 04
    function decimalHexadecimal($decimal){
        $q = 1;
        $r = 0;
        $msg = "";
        while($q >= 1){
            $q = $decimal / 16;//O resultado da operação
            $r = $decimal % 16;//O resto da divisão
            $decimal = $q;
            if($r > 9){
                $r = converter($r);
            }
            $msg .= $r;
        }
        return strrev($msg);
    }//fim

    function hexadecimalDecimal($hexadecimal){
        $tamanho = strlen($hexadecimal);//Medindo o tamanho da palavra
        $caracter = "";
        $res = 0;
        for($i=$tamanho-1;$i >= 0; $i--){
            $caracter = substr($hexadecimal,$i,1);
            $caracter = converterDois($caracter);
            echo "<br>".pow(16,$i);
            $res += $caracter * pow(16,$i);
            
        }
        return $res;
    }//fim
















    //Eu uso para escrever na tela o elemento echo
    echo " <br>A soma de $num1 e $num2 é: ".soma($num1,$num2);
    echo " <br>A subtração de $num1 e $num2 é: ".subtracao($num1,$num2);
    echo " <br>A divisão de $num1 e $num2 é: ".divisao($num1,$num2);
    echo " <br>A multiplicação de $num1 e $num2 é: ".multiplicacao($num1,$num2);
    echo " <br>$num1 elevado a $num2 é: ".potencia($num1,$num2);
    echo " <br>A raiz de $num1 é: ".raiz($num1);
    echo tabuada($num2);
    echo " <br>O valor de delta é: ".calcularDelta($a,$b,$c);
    echo " <br>O valor de X1 é: ".calcularX1($a,$b,$c);
    echo " <br>O valor de X2 é: ".calcularX2($a,$b,$c);
    echo " <br>".binarioDecimal(10001001);
    echo " <br>".decimalBinario(50);
    echo " <br>".fibonacci(10);
    echo " <br><br>Decimal para Hexadecimal: ".decimalHexadecimal(5325);
    echo " <br><br>Hexadecimal para Decimal: ".Hexadecimaldecimal("14CD");
?>

