Sub Classes

- Uma classe pode ser extensão de outra, dessa forma ela herdará todas as variáveis 
e funções da outra classe, e terpa as que forem adicionadas pelo programador. 

- No PHP não é permitido usar herança múltipla: uma classe pode ser extensão de apenas UMA outra. 

Exemplo de como criar uma classe extendida:

<?
    class novaConta extends Conta {
        var $numero;
        
        function numero() {
            return $this-> numero;
        }
    }
?>

A classe acima é derivada da classe Conta, tendo as mesmas funções e variáveis -porém com adição 
da variável $numero e a função numero.
