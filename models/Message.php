<?php
class Message
{
    public static function add($data)
    {


        $requete = "INSERT INTO `messages`(`nom`, `ville`, `numero`, `email`, `local`, `sujet`, `content`) VALUES (:nom, :ville, :numero, :email, :local, :sujet, :content)";
        $stmt = Db::connect()->prepare($requete);


        // Sanitize and bind parameters
        $sanitizedNom = strip_tags($data['nom']);
        $sanitizedVille = strip_tags($data['ville']);
        $sanitizedNumero = strip_tags($data['numero']);
        $sanitizedEmail = strip_tags($data['email']);
        $sanitizedLocal = strip_tags($data['local']);
        $sanitizedSujet = strip_tags($data['sujet']);
        $sanitizedContent = strip_tags($data['content']);

        $stmt->bindParam(':nom', $sanitizedNom);
        $stmt->bindParam(':ville', $sanitizedVille);
        $stmt->bindParam(':numero', $sanitizedNumero);
        $stmt->bindParam(':email', $sanitizedEmail);
        $stmt->bindParam(':local', $sanitizedLocal);
        $stmt->bindParam(':sujet', $sanitizedSujet);
        $stmt->bindParam(':content', $sanitizedContent);

        $stmt->execute();

        $_SESSION['success'] = 'Message has been Sent Successfuly';

        Redirect::to('contact');
    }
}
