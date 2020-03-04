This

- Variável que é usado em uma classe para indicar ela mesma. 
- Quando uma classe é instanciada em um objeto e uma função dele 
na definição da classe usa $this, essa variável indica o objeto que estamos utilizando. 

Exemplo:

<?
    class Conta {
        var $saldo;

        function verSaldo() {
            return $this->saldo;
        }
        
        function addCredito($valor) {
            $this->saldo += $valor;
        }
    }

    $minhaConta = new Conta; 
    $minhaConta-> verSaldo() #Não contém valor algum já que a variável interna não foi inicializada

    $minhaConta->addCredito(50);
    $minhaConta-> verSaldo(); #retorna 50
?>
