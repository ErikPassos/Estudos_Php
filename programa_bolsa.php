<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        //Criar um programa de compras para bolsas
       //Criando a função ComprarBolsa
        function ComprarBolsa($bolsa) { //Informando a variável $bolsa no parâmetro, para quando for informada pelo usuário ser testada no programa
            if (!empty($bolsa)):// Criando a condicional -> Se a variável $bolsa existe e estiver vazia tem valor, caso esteja vazia vai cair no meu último else --> echo "Não tem bolsa em lugar nenhum";
                if ($bolsa == "Verde" || $bolsa == "Vermelho")://Verificando opções e validando se for verdadeiro
                    echo "Achei sua bolsa na cor: <b>{$bolsa}</b>"; //Informando se a condição for verdadeira
                elseif ($bolsa == "Azul" || $bolsa == "Branco")://Verificando opções e validando se for verdadeiro
                    echo "Achei sua bolsa na cor <b>{$bolsa}</b>"; //Informando se a condição for verdadeira
                else://Se nenuma condição for verdadeira informe:
                    echo "Alô amor, não tem as cores que vc quer, posso levar outra na cor <b>{$bolsa}</b><br>"; //Informando quando a condição não é verdadeira
                    $amor = TRUE; //Testando com o usuário outras opções
                    if ($amor):// Se a resposta for TRUE(verdadeiro) informe:
                        echo "Pode sim amor, traga qualquer uma<br>"; //Informando se a condição for verdadeira
                    else://Se a resposta da variável $amor for FALSE(falso) informe:
                        echo "Não precisa, venha descansar"; //Informando se a condição for falsa
                    endif;
                endif;
            else:
                echo "Não tem bolsa em lugar nenhum"; //Informando a condição se a variaável $bolsa estiver vazio
            endif;
        }

        echo ComprarBolsa("preto");//Informando o valor da minha função para ser testada
        echo "<hr>";
        
        function d($e,$f=5, $g=3){
            return $e+$f-$g;
        }
        
        
        
        $a=4;
        $b=2;
        
        $c=$b-($a*$b+($a-$b)*$a)-d($a,$b);
        echo "O resultado é $c";
        
        
        
        
        
        ?>
    </body>
</html>
