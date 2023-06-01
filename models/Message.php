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
    }

    private static function validateData($data)
    {
        // Implement your validation rules for each data field
        $errors = [];

        // Validate 'nom'
        if (empty($data['nom'])) {
            array_push($errors, 'The name field is required.');
        }

        // Validate 'ville'
        if (empty($data['ville'])) {
            array_push($errors, 'The city field is required.');
        }

        // Validate 'numero'
        if (empty($data['numero'])) {
            array_push($errors, 'The number field is required.');
        } elseif (!is_numeric($data['numero'])) {
            array_push($errors, 'Invalid number format.');
        }

        // Validate 'email'
        if (empty($data['email'])) {
            array_push($errors, 'The email field is required.');
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'Invalid email format.');
        }

        // Validate 'local'
        if (empty($data['local'])) {
            array_push($errors, 'The local field is required.');
        }

        // Validate 'sujet'
        if (empty($data['sujet'])) {
            array_push($errors, 'The sujet field is required.');
        }

        // Validate 'content'
        if (empty($data['content'])) {
            array_push($errors, 'The content field is required.');
        }

        if (count($errors) > 0) {
            return ['valid' => false, 'errors' => $errors];
        }

        return ['valid' => true];
    }
}
