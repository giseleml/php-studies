Construtores

- Função definida na Classe que é automaticamente chamada no momento que esta classe é instanciada 
através do operador New. 
- Deve ter o mesmo nome que a Classe a que pertence.

Exemplo: 

<? 
    class Conta() {
        var $saldo;

        # Construtor 
        function conta() {
            $this.saldo = 0; 
        }

        function saldo() {
            return $this->saldo; 
        }

        function credito($valor) {
            $this->saldo += $valor;
        }
    }
?>

- Um construtor pode conter argumentos. No exemplo acima, o construtor pode receber como argumento 
um valor, que seria o valor inicial da conta. 
