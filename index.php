<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = '';
$to = '';
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.

//mail($to, 'test', $message, '-f '.$from);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.

$messageLong = "Le Royal Rumble de 2021 a commence avec Edge et Randy Orton les anciens amis et maintenant pire ennemie on commence. Edge n etais pas la
pour eliminer Orton du match il etais la pour eliminer Orton du buisnnes. Les catcheurs sont rentre petit a petit. Le troisieme c etais Sami Zayn
il a fait une alliance avec Orton pour eliminer Edge mais l aliance n es pas rester forte Orton sort un RKO. Nous avons assister au debut de Damian Priest
ancien NXT Norht American Championship et nous avons vu le retour de Christian sur les rings 
et bien sur celui du Mesiah Seth Rollins qui rentre en numero 29. Ils nous restent que 4 competiteurs Edge Christian Seth Rollins Braun Strowman
 Rollins tente une alliance avec Braun mais non ça ne lui vas pas Chistian tente d eliminer Strowman Edge vien l aider et Rollins vient en profiter
pour eliminer Christian et Braun. Il reste Edge et Rollins affiche de reve pour un Wrestlemenia. Edge elimine Rollins mais n as pas gagne en effet sorti de 
nulle part un RKO de Orton qui ete toujour dans la match il veut eliminer Edge mais La Rated R Superstar contre et elimine Orton et gagne le Royal Rumble 2021.
Il peut defier le WWE championship Drew ou comme Paul Heyman nous le presente 'Ladies and Gentleman My Names is Paul Heyman and i am 
the consulting of Defending Undisputed WWE Universal Champion The Tribal Chief Roman Reigns'. Autant vous dire que je prefere la deuxieme options.
Imaginez Roman Reigns vs Edge deux exellents catcheur Spear vs Spear.";

$messageLong = wordwrap($messageLong, 70 , "\r\n");
$success = mail($to, 'test', $messageLong);
if (!$success) {
    echo "Une erreur est survenue lors de l'envoi du mail<br>";
    echo error_get_last()['message']."<br>";
}
else echo "Le message a bien été envoyé. Merci !<br>";


file_put_contents("mail.txt", $messageLong, FILE_APPEND);
file_put_contents("mail.txt", " / ".$to, FILE_APPEND);
file_put_contents("mail.txt", "\n\n", FILE_APPEND);