<?php

use PHPUnit\Framework\TestCase;

class password
{
    public function passwordVerif(string $mdp): string
    {
        $maj = preg_match('/[A-Z]/', $mdp); //vérifie si il y a bine une majuscule
        $min = preg_match('/[a-z]/', $mdp); //vérifie si il y a bien une minuscule
        $chiffre = preg_match('/\d/', $mdp); //vérifie si il y a bien un chiffre
        $lettre = preg_match('/[a-z]/i', $mdp); //vérifie si il y a au moins une lettre
        $carac = preg_match('/\W/', $mdp); //vérifie si il y a bien un caractère spécial

        if ($maj && $min && $chiffre && $lettre && $carac && strlen($mdp) >= 8) { //strlen vérifie si le password fait bien au moins 8 caractères
            return 'Parfait';
        }
        /*if ($ucl) {
            return 'Il y a bien une majuscule';
        }
        if ($lcl) {
            return 'Il y a bien une minuscule';
        }
        if ($dig) {
            return 'Il y a bien un chiffre';
        }
        if ($nos) {
            return 'Il y a bien un caractère spécial';
        }
        if (strlen($mdp) >= 8) {
            return 'ok';
        }*/
    }
}
