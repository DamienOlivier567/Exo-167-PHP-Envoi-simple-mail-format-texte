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

$messageLong = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet gravida mauris, in venenatis 
erat. Aliquam erat volutpat. Sed maximus sit amet ante at sagittis. Nullam auctor sodales ligula, at hendrerit purus 
imperdiet sit amet. Sed mauris augue, vestibulum et cursus eget, rutrum id sapien. Nulla vel urna velit. Suspendisse
 congue at libero non luctus. Nullam eget justo vel dolor vulputate sodales. Fusce elementum bibendum elit, sit amet 
 fringilla ipsum varius nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
 In viverra diam scelerisque augue luctus, vel condimentum lorem luctus. Ut id congue dui, vel malesuada augue. In 
 ullamcorper dui ut feugiat tempus. Suspendisse tellus tellus, condimentum ac tristique quis, efficitur eu nisl. 
 Praesent efficitur ipsum et erat volutpat, varius laoreet lorem mollis. Quisque.";

$messageLong = wordwrap($messageLong, 70 , "\r\n");
$success = mail($to, 'test', $messageLong);
if (!$success) {
    echo "Une erreur est survenue lors de l'envoi du mail<br>";
    echo error_get_last()['message']."<br>";
}
else{
    echo "Le message a bien été envoyé. Merci !<br>";
}


file_put_contents("mail.txt", $messageLong, FILE_APPEND);
file_put_contents("mail.txt", " / ".$to, FILE_APPEND);
file_put_contents("mail.txt", "\n\n", FILE_APPEND);