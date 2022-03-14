<?php

//Récupération du JSON et on le convertit pour pouvoir l'utiliser
$tableauJSON = file_get_contents( get_template_directory_uri()."/liaisons/js/messages-erreur_form.json");
$tMessagesJson = json_decode($tableauJSON, true);

$pattern = "/^[-a-zA-Zàâçéèêëîïôûùüÿñæœ ]+$/";
$patternDestinataire = "\b(sylvain|michel|pascal|benoît)\b";
$patternCourriel = "/^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$/";
$patternMessage = "/^[a-zA-Z0-9_.!@#$%^&*()?-]+$/";
$captchaErreur = "";
$confirmationEnvoi = "";

//On regarde si le formulaire a été "submit"
if(isset($_POST["submit"])) {
    $nomInput = validerChampsServeur("nom", $tMessagesJson, $pattern);
    $courrielInput = validerChampsServeur("courriel", $tMessagesJson, $patternCourriel);
    $destinataireInput = validerChampsServeur("destinataire", $tMessagesJson, $patternDestinataire);
    $sujetInput = validerChampsServeur("sujet", $tMessagesJson, $patternMessage);
    $messageInput = validerChampsServeur("message", $tMessagesJson, $patternMessage);
    $captchaMessage = $tMessagesJson["humain"]["erreurs"]["vide"];
    $successEnvoi = "";

    $tValidation = array("nom" => $nomInput, "courriel" => $courrielInput,
        "destinataire" => $destinataireInput, "sujet" => $sujetInput,
        "message" => $messageInput);

    $nbChampsValides = 0;
    foreach ($tValidation as $champs) {

        if (array_key_exists("valide", $champs)) {
            if ($champs["valide"] == "vrai") {
                $nbChampsValides++;
            }
        }
    }
//    if(isset($_POST["g-recaptcha-response"])){
//        $captcha = $_POST["g-recaptcha-response"];
//    }
//
//    if($captcha != false) {
////        if($nbChampsValides === 6) {
////            $secretKey = "6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK";
////            $ip=$_SERVER["REMOTE_ADDR"];
////            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=.$ip");
////            $responseKeys = json_decode($response, true);
////
////
////            if(intval($responseKeys["success"]) === 1) {
////
////                //$post=get_post($destinataire);
////                //to = get_field("courriel_responsable");
////
////                $to = get_option("admin_email");
////                $subjet = "Quelqu'un a envoyé un message depuis le site ".get_bloginfo("name");
////
////                $headers = "From: ". trim($_POST["courriel"]) . "\r\n" . "Reply-to: " . trim($_POST["courriel"]) . "\r\n";
////
////                $envoi = wp_mail($to, $subjet, strip_tags(trim($_POST["message"])), $headers);
////
////
////    if ($envoi) {
// //       $confirmationEnvoi = "oui";
////        $successEnvoi = $tMessagesJson["retroactions"]["courriel"]["envoyer"];
////    } else {
////        $confirmationEnvoi = "non";
////        $successEnvoi = $tMessagesJson["retroactions"]["courriel"]["avorter"];
////    }
////        }
//    } else {
//        $captchaErreur = "erreur";
//    }
}

function validerChampsServeur($nomChamps, $jsonMessage, $pattern) {

    if(isset($_POST[$nomChamps])){

        $valeur = trim($_POST[$nomChamps]);

        if(preg_match("$pattern", $valeur)){
            $valide = "vrai";
        }else{
            $valide = "faux";
        }

        if($valide == "vrai"){
            $message = "";
        } else if($valeur == ""){
            $message = $jsonMessage[$nomChamps]["erreurs"]["vide"];
        } else {
            $message = $jsonMessage[$nomChamps]["erreurs"]["motif"];
        }

        $reponseChamps=array("valeur"=>$valeur,"valide"=>$valide,"message"=>$message);

        return $reponseChamps;

    } else {
        $valeur = "";
        $message = $jsonMessage[$nomChamps]["erreurs"]["vide"];
        $reponseChamps=array("valeur"=>$valeur,"valide"=>"faux","message"=>$message);

        return $reponseChamps;
    }
}


