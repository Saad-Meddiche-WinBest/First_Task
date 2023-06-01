<?php
class MessageController
{
    public static function AddMessage()
    {
        $validationResult = self::validateData();

        if (!$validationResult['valid']) {
            return $_SESSION['errors'] = $validationResult['errors'];
        }

        $data = array(
            'nom' => $_POST["nom"],
            'numero' => $_POST["numero"],
            'email' => $_POST["email"],
            'ville' => $_POST["ville"],
            'local' => $_POST["local"],
            'sujet' => $_POST["sujet"],
            'content' => $_POST["content"],
        );

        Message::add($data);
    }

    private static function validateData()
    {
        // Implement your validation rules for each data field
        $errors = [];

        // Validate 'nom'
        if (empty($_POST['nom'])) {
            array_push($errors, 'The name field is required.');
        }

        // Validate 'ville'
        if (empty($_POST['ville'])) {
            array_push($errors, 'The city field is required.');
        }

        // Validate 'numero'
        if (empty($_POST['numero'])) {
            array_push($errors, 'The number field is required.');
        } elseif (!is_numeric($_POST['numero'])) {
            array_push($errors, 'Invalid number format.');
        }

        // Validate 'email'
        if (empty($_POST['email'])) {
            array_push($errors, 'The email field is required.');
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'Invalid email format.');
        }

        // Validate 'local'
        if (empty($_POST['local'])) {
            array_push($errors, 'The local field is required.');
        }

        // Validate 'sujet'
        if (empty($_POST['sujet'])) {
            array_push($errors, 'The sujet field is required.');
        }

        // Validate 'content'
        if (empty($_POST['content'])) {
            array_push($errors, 'The content field is required.');
        }

        if (count($errors) > 0) {
            return ['valid' => false, 'errors' => $errors];
        }

        return ['valid' => true];
    }
}
