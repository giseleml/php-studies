VALIDAÇÃO DE FORMS

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Explicando: 

1) 

    $_SERVER["PHP_SELF"] 
         Variável superglobal que retorna o nome do arquivo do script em execução. 
    Assim, ele envia o form para a própria página ao invés de ir para outra, de forma que o usuário terá
    mensagens de erro na mesma página do formulário. 

2) 
    htmlspecialchars()
        Essa função converte caracteres especiais do HTML (como < e >, por &lt; e &gt;).
        Isso é uma prevenção contra hackers que explorem o código injetando códigos HTML/JS em formulários.


OBSERVAÇÃO:
A variável (1 - $_SERVER["PHP_SELF"] ) Pode ser utilizada por Hackers para injetar seus scripts
e até enviar usuários para outras páginas. Para previnir isso:

Usar a função (2 - htmlspecialchars): 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Validando os formulários:

<?php

#  1) Define variáveis e dar-lhes valores vazios. 
$name = $email = $gender = $comment = $website = "";

# 3) Checa e trata cada variável recebida pelo método POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

# 2) Tratar as informações: trim(tira espaços), stripslashes(remove barras \)

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
