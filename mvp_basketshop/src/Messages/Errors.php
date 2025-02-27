<?php 

namespace App\Messages;

final class Errors 
{
     // Définissez vos constantes ou méthodes d'erreur ici
     public const ERROR_FILE_NOT_FOUND = "Le fichier JSON n'existe pas : ";
     public const ERROR_FILE_READ = "Impossible de lire le fichier JSON.";
     public const ERROR_JSON_DECODE = "Erreur de décodage JSON : ";
}
