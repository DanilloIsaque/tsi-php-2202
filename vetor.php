<?php

//vetores

$diasemana =[0=>'domingo',1=>'segunda', 2=>'terca',
3=>'quarta',4=>'quinta',5=>'sexta',6=>'sabado'];

echo"<pre>";
var_dump($diasemana);//importante para depuração do código

$hoje = date( 'w');
echo "hoje é {$diasemana[$hoje]}"; //interpolação com vetor precisa das{}

$aluno = [  0 => [  'matricula' => 634545, 

                    'nome' => 'João',

                    'semestre' => 2],

            1 => [  'matricula' => 8548, 

                    'nome' => 'Paulo',

                    'semestre' => 3],

            2 => [  'matricula' => 65422, 

                    'nome' => 'Maria',

                    'semestre' => 1]];

                    echo count($aluno);

          echo '<table>
                    <tr>
                        <td>matricula</td>
                        <td>nome</td>
                        <td>semestre</td>
                    </tr>';
                                 
        for($i=0;$i<count($aluno);$i++)
        {
           echo "<tr>
                    <td>{$aluno[$i]['matricula']}</td>
                    <td>{$aluno[$i]['nome']}</td>
                    <td>{$aluno[$i]['semestre']}</td>
                </tr> "; 

                

        }

        echo  '</table>'


?>

