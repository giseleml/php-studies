As superglobais $_GET e $_POST são usadas para coletar informações de formulários. 

O exemplo abaixo mostra um formulário HTML simples com inputs e um botão submit...

<html>
    <body>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    </body>
</html>


...Quando o usuário preenche o form e clica no botão submit, as informações são enviadas para 
processamento para um arquivo php chamado "welcome.php". Ele é enviado com o método HTTP POST.

Para exibir as informações enviadas é possível dar um echo em todas as variáveis, dentro do arquivo 
"welcome.php".

<html>
    <body>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    </body>
</html>

O output seria o seguinte: 

#
    Welcome John
    Your email address is john.doe@example.com
#

Também é possível atingir esse resultado com o método GET: 
<html>
    <body>
    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
    </body>
</html>

- É importante validar as informações do formulário para proteger seu script de códigos maliciosos. 

--- GET vs. POST ---

Ambos criar uma array que contém chaves(nomes dos controles dos formulários) e valores (informação que o usuário forneceu).

$_GET é um array de variáveis passadas para o script atual via parâmetros URL. 
    Informações enviadas com ele são visiveis para todos, pois nomes de variáveis e valores são vistos no URL.
    Possui uma limitação de 2000 caracteres para envio. 
    Por ficar registrado na URL, pode ser usado para bookmark. 
    NUNCA deve ser usado para informações confidenciais, como senhas. 

$_POST é uma array de variáveis passadas para o script atual via o método HTTP POST. 
    Informações enviadas com ele são invisíveis para todos. 
    Não há limite de informações para serem enviadas.
    Não é possível ser usado para bookmark.
