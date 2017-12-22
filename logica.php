<?php $title = 'Ejercicios Programación II'; include("plantilla/top.php");?>
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Resultado</h2>
  </div>
  <div class="mdl-card__supporting-text">
<?php
$funcion=$_POST['funcion'];
switch ($funcion) {
    case 'suma3Num':
        echo suma3Num();
        break;
    case 'parimpar10Num':
        echo parimpar10Num();
        break;
    case 'orden5Numasc':
        echo orden5Numasc();
        break;
    case 'orden5Numdesc':
        echo orden5Numdesc();
        break;
    case 'textOrnum':
        echo textOrnum();
        break;
    case 'sum10Num':
        echo sum10Num();
        break;
    case 'teoPitagoras':
        echo teoPitagoras();
        break;
    case 'cuentaLetras':
        echo cuentaLetras();
        break;
    case 'comparaString':
        echo comparaString();
        break;
    case 'ctasHogar':
        echo ctasHogar();
        break;
    case 'calcSueldo':
        echo calcSueldo();
        break;
    case 'urlImagenes':
        echo urlImagenes();
        break;
    case 'suma':
        echo sumaNum($n1,$n2);
        break;
    case 'resta':
        echo resta($n1,$n2);
        break;
    default:
        echo 'no se ha enviado operacion';
        break;
}

function suma3Num()
{
    $mayor = 0;
    $menor = $_POST['n1'];
    $count = 0;
    $n = array( '1' => $_POST['n1'], 
                '2' => $_POST['n2'], 
                '3' => $_POST['n3']
            );

    foreach ($n as &$valor) {
        $count = $count + 1;
        if ($valor > $mayor) {
            $mayor = $valor;
        } else if($valor < $menor) {
            $menor = $valor;
        }
        echo $count.': '.$valor."<br>";
    }
    return 'El mayor es: '.$mayor.'<br>'.'El menor es: '.$menor;
}

function parimpar10Num()
{
    $par = 0;
    $impar = 0;
    $count = 0;
    $n = array( '1' => $_POST['n1'], 
                '2' => $_POST['n2'], 
                '3' => $_POST['n3'], 
                '4' => $_POST['n4'], 
                '5' => $_POST['n5'], 
                '6' => $_POST['n6'], 
                '7' => $_POST['n7'], 
                '8' => $_POST['n8'], 
                '9' => $_POST['n9'], 
                '10' => $_POST['n10']
            );
    foreach ($n as &$valor) {
        $count = $count + 1;
        if ($valor % 2 == 0 || $valor == 0) {
            $par = $par+1;
        } else {
            $impar = $impar+1;
        }
        echo $count.': '.$valor."<br>";
    }
    return 'Pares: '.$par.' <br>Impares: '.$impar;
}

function orden5Numasc()
{
    $par = 0;
    $impar = 0;
    $count = 0;
    $n = array( '1' => $_POST['n1'], 
                '2' => $_POST['n2'], 
                '3' => $_POST['n3'], 
                '4' => $_POST['n4'], 
                '5' => $_POST['n5']
            );
    asort($n);
    foreach ($n as &$valor) {
        $count = $count + 1;
        echo $count.': '.$valor."<br>";
    }
    return 'Ordenado ascendente';
}

function orden5Numdesc()
{
    $par = 0;
    $impar = 0;
    $n = array( '1' => $_POST['n1'], 
                '2' => $_POST['n2'], 
                '3' => $_POST['n3'], 
                '4' => $_POST['n4'], 
                '5' => $_POST['n5']
            );
    arsort($n);
    foreach ($n as &$valor) {
        $count = $count + 1;
        echo $count.': '.$valor."<br>";
    }
    return 'Ordenado descendente';
}

function textOrnum()
{
    $n = $_POST['n1'];
    if(is_numeric($n)) {
        echo "'{$n}' es número", PHP_EOL;
    } else {
        echo "'{$n}' NO es número", PHP_EOL;
    }
}

function sum10Num()
{
    $count = 0;
    $sumatoria = 0;
    $n = array( '1' => $_POST['n1'], 
                '2' => $_POST['n2'], 
                '3' => $_POST['n3'], 
                '4' => $_POST['n4'], 
                '5' => $_POST['n5'], 
                '6' => $_POST['n6'], 
                '7' => $_POST['n7'], 
                '8' => $_POST['n8'], 
                '9' => $_POST['n9'], 
                '10' => $_POST['n10']
            );
    foreach ($n as &$valor) {
        $count = $count + 1;
        $sumatoria = $sumatoria + $valor;
        echo $count.': '.$valor."<br>";
    }
    return 'Total: '.$sumatoria;
}

function teoPitagoras()
{
    $count = 0;
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $hipotenusa = pow($n1,2)+pow($n2,2);
    echo 'Cateto A: '.$n1.' Cateto B: '.$n2;
    echo '<br>Hipotenusa = '.sqrt($hipotenusa);
}

function cuentaLetras()
{
    $data = $_POST['data'];
    $letra = $_POST['letra'];
    foreach (count_chars($data, 1) as $i => $val) {
        if (chr($i) == $letra){
            echo "Hay $val caracteres \"" , chr($i) , "\" en la cadena \"" , $data , "\".\n <br>";
        }
    }
}

function comparaString()
{
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    if ($data1 == $data2) {
        echo 'String 1: '.$data1.'<br>';
        echo 'String 2: '.$data2.'<br>';
        echo 'Son iguales';
    } else {
        echo 'String 1: '.$data1.'<br>';
        echo 'String 2: '.$data2.'<br>';
        echo 'No se parecen tanto...';
    }
}


function ctasHogar()
{
    $sueldo = $_POST['sueldo'];
    $arriendo = $_POST['arriendo'];
    $luz = $_POST['luz'];
    $agua = $_POST['agua'];
    $gas = $_POST['gas'];
    $otros = $_POST['otros'];
    $sumatoria = $arriendo+$luz+$agua+$gas+$otros;
    echo 'Sueldo: '.$sueldo;
    echo '<br>Total cuentas: '.$sumatoria;
    if ($sumatoria > $sueldo ){
        echo '<br>No te alcanza el sueldo para pagar las cuentas, qué pena.';
    }
    if ($sumatoria < $sueldo ){
        echo '<br>Si te alcanza el sueldo para pagar, así que paga...';
    }
}


function calcSueldo()
{
    $sueldo = $_POST['sueldo'];
    $sillas = $_POST['sillas'];
    $resultado = $sueldo*8+$sillas-50*0.6;
    echo 'Sueldo x hora: '.$sueldo;
    echo '<br>Sillas: '.$sillas;
    echo '<br>Sueldo total: $'.$resultado;

}

function urlImagenes()
{
    $url = file_get_contents($_POST['url']);
    echo $_POST['url'];
    echo '<br>La cantidad de veces que el tag IMG está presente en la URL son: '.substr_count($url, '<img');
}


/* Ejemplos de clase */
function sumaNum($n1,$n2)
{
    return $n1+$n2;
}

function resta($n1,$n2)
{
    $num1=(int) $n1;
    return $num1-$n2;
}
function mult($n1,$n2)
{
    return $n1*$n2;
}
function dividir($n1,$n2)
{
    if($n2!=0)
    {
        return $n1/$n2;
    }
    else{ 
        echo 'No se puede dividir por cero';        
    }
}

/* Fin Ejemplos de clase */

?>


  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a  href="index.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Volver
    </a>
  </div>
</div>

<?php include("plantilla/bottom.php");?>