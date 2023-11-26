<?php
function cesarChiffrement(string $texte , int $decalage) : string
{
   $message_chiffre = "";

   for ($i=0;$i<strlen($texte);$i++ ){
       
    if (ctype_alpha($texte[$i]) == true){
        $base = "";
        $base = ctype_upper($texte[$i]) ? "A" : "a" ;
        $message_chiffre .= chr( (ord($texte[$i]) - ord($base) + $decalage) % 26 + ord($base));
    }else{
        $message_chiffre .= $texte[$i];
    }
    
} 

return $message_chiffre;
   
} 

function dechiffrementCesar(string $texte , int $decalage) : string
{
    return cesarChiffrement($texte,-$decalage);
}

$chiffre = cesarChiffrement("Bonsoir",7);
$dechiffre = dechiffrementCesar("Ivuzvpy",7);

echo "Message crypté : ". $chiffre; echo '<br>';
echo "Message décrypté : ".$dechiffre;  

?>