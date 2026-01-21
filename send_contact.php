<?php
// Vérifier que la requête est en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php?page=home');
    exit;
}

// Récupérer et nettoyer les données du formulaire
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$sujet = isset($_POST['sujet']) ? htmlspecialchars(trim($_POST['sujet'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

// Validation basique
$errors = [];

if (empty($name)) {
    $errors[] = 'Le nom est requis.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Une adresse email valide est requise.';
}

if (empty($sujet)) {
    $errors[] = 'Le sujet est requis.';
}

if (empty($message)) {
    $errors[] = 'Le message est requis.';
}

// Si pas d'erreurs, envoyer l'email
if (empty($errors)) {
    // Configuration de l'email
    $to = 'martin.parizet@agfagoofay.fr'; // Votre adresse email
    $subject = '[Portfolio Contact] ' . $sujet;
    
    // Corps de l'email
    $body = "Nouveau message de contact depuis votre portfolio\n\n";
    $body .= "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Sujet: $sujet\n\n";
    $body .= "Message:\n$message\n";
    
    // Headers pour OVH mutualisé
    // IMPORTANT: Sur OVH, le From doit être une adresse email du domaine hébergé
    // Remplacez contact@votredomaine.fr par une vraie adresse email créée dans votre panel OVH
    $from = 'martin.parizet@agfagoofay.fr'; // Email du domaine (à créer dans OVH)
    
    $headers = "From: Portfolio <$from>\r\n";
    $headers .= "Reply-To: $name <$email>\r\n"; // L'email du visiteur pour la réponse
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Envoi de l'email
    $mailSent = mail($to, $subject, $body, $headers);
    
    session_start();
    
    if ($mailSent) {
        // Vérifier s'il y a eu des erreurs PHP lors de l'envoi
        $lastError = error_get_last();
        $hasMailError = $lastError && (
            strpos($lastError['message'], 'mail()') !== false ||
            strpos($lastError['message'], 'Failed to connect to mailserver') !== false
        );
        
        if ($hasMailError) {
            $_SESSION['contact_success'] = 'Votre message a été soumis. Note : Le serveur mail local n\'est pas configuré, les emails ne seront envoyés qu\'en production.';
        } else {
            $_SESSION['contact_success'] = 'Votre message a été envoyé avec succès ! Je vous répondrai dans les plus brefs délais.';
        }
        header('Location: index.php?page=home#contact');
        exit;
    } else {
        $errors[] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.';
    }
}

// Si erreurs, rediriger avec message d'erreur
if (!empty($errors)) {
    session_start();
    $_SESSION['contact_errors'] = $errors;
    $_SESSION['form_data'] = [
        'name' => $name,
        'email' => $email,
        'sujet' => $sujet,
        'message' => $message
    ];
    header('Location: index.php?page=home#contact');
    exit;
}
