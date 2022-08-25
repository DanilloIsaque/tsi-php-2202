<?php
$nome = 'danillo isaque';//variavel


echo "olá, $nome!";


//comentário de linha
#comentario de linha
/*
comentário 
de
bloco
*/

//documentacao do php fica em: https:www.php.net

//for
for($cont=1;$cont<=11;$cont++)
{
    echo "<br>";
    echo $nome;
}
//wihle
$cont=1;
while($cont<=11)
{
    echo "<br>";
   echo $nome;
    $cont++;
}

//do while
$cont=1;
do{
    echo"<br>";
    echo $nome;
    $cont++;
}while($cont<=11);

if(5>10)
{
    echo"5 é maior que 10";
}
else
{
    echo "<br>";
    echo"cinco não é maior que 10";
}
$dia=0;
switch($dia){
    case 1:
        echo "segunda,pai";
        break;
    case 2:
        echo "terça";
        break;
        case 3:
            echo "quarta";
            break;
            case 4:
                echo "quinta";
                break;
                case 5:
                    echo "sexta";
                    break;
                    case 6:
                        echo "sabado";
                        break;
                        case 7:
                            echo "domingo";
                            break;
                            default:
                            echo "<br>";
                            echo "algo deu errado";
                        }
?>