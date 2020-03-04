Sessions 

- Mecanismo parecido com os tradicionais Cookies, porém sessões são armazenadas no próprio
servidor, ao invés da máquina do usuário, e não expiram a menos que o programador queira 
apagar a sessão.

Existem algumas funções no PHP que controlam as sessões: 


Session_start() 
Session_register(variável) 
Session_unregister(variável) 
Session_is_registered(variável)
Session_destroy() (só deve ser usado quando for da vontade do programador,
acabar com todos as sessões daquele visitante, portanto muito cuidado com essa função).