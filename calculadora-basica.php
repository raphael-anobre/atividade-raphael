<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atividade de Recuperação</title>
<style>
body { font-family: 'Segoe UI', Verdana; }
.entrega { background-color: yellow;}
</style>
</head>

<body>
    <h1>Atividade de Recuperação - PHP <span class="entrega">(ENTREGAR por e-mail ATÉ 12/06/2023)</span></h1>
    <hr>
    <h2>Calculadora para operações básicas - Orientações Gerais</h2>
    <hr>
    <h3>Etapa 01</h3>
    <p>Você deve criar um formulário HTML com os seguintes elementos:</p>
    <ul>
        <li>Campo <b>input</b> de número para digitação do primeiro valor</li>
        <li>Campo <b>input</b> de número para digitação do segundo valor</li>
        <li>Campo <b>select</b> com 1 <b>option</b> VAZIO e mais 4 (um para cada operação básica): <b>SOMA</b>, <b>SUBTRAÇÃO</b>, <b>MULTIPLICAÇÃO</b> e <b>DIVISÃO</b></li>
        <li>Botão submit para calcular</li>
    </ul>
    
    <h3>Etapa 02</h3>
    <p>Usando PHP, faça a seguinte programação:</p>
    <ul>
        <li>Usando condicional <b>if</b>, detecte se o botão calcular foi acionado</li>
        <li>Após ser acionado, crie 3 variáveis: <b>operação</b>, <b>valor1</b> e <b>valor2</b></li>
        <li>Em seguida, utilizando uma estrutura condicional (if/elseif/else ou switch/case/default), analise a variável <b>operação</b> de acordo com os seguintes critérios:
            <ul>
                <li>Se for igual à palavra <b>SOMA</b>, faça a soma das duas variáveis e mostre o resultado.</li>
                <li>Senão, se for igual à palavra <b>SUBTRAÇÃO</b>, faça a subtração das duas variáveis e mostre o resultado.</li>
                <li>Senão, se for igual à palavra <b>MULTIPLICAÇÃO</b>, faça a multiplicação das duas variáveis e mostre o resultado.</li>
                <li>Senão, se for igual à palavra <b>DIVISÃO</b>, faça a divisão das duas variáveis e mostre o resultado.</li>
                <li>Senão, mostre a mensagem <b>operação desconhecida</b></li>
            </ul>
        </li>
    </ul>
    
</body>

</html>