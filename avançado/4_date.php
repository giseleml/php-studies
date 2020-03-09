DATE

A função date() requer parâmetros que especificam o formato da data ou tempo. 

d - dia do mês (01 à 31)
m - mês (01 à 12)
Y - ano (quatro dígitos)
l - dia da semana 

Também é permitido usar caracteres como '/', '-' ou '.' no meio para formatação 

Exemplo: 

<?
echo "Hoje é " . date("Y/m/d") . "<br>"; # "Hoje é 2020/03/09 "
echo "Hoje é " . date("l") . "<br>"; # "Hoje é segunda"
?>

TEMPO 

H - formato de hora 24h (00 à 23)
h - formato de hora 12h (01 à 12)
i - minutos (00 à 59)
s - segundos (00 à 59)
a - am ou pm 

Exemplo:

<?
echo "São " . date(h:i:sa); 
?>

