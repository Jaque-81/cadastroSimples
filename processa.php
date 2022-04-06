<?php
//para receber os dados do formulário
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITAZE_STRING);
//FILTER_SANITAZE_STRING limpa os dados da variável que vem do formulário; atribuição para uma variável nome.
$email = filter_input(INPUT_POST, 'email', FILTER_SANITAZE_EMAIL); // atribuição para uma variável chamada e-mail.
echo "Nome: $nome <br>";
echo "E-mail: $email <br>";