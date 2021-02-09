<?php

class Utilisateur {

    protected const TEST = "tata";
    //The user name
    private string $nom;
    //User code.
    protected string $code;

    /**
     * Utilisateur constructor.
     * @param string $nom
     */
    public function __construct (string $nom) {
        $this->setNom($nom);
    }

    /**
     * Return the user's name.
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the user's name.
     * @param string  The user name.
     */
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    /**
     * Generate a user code.
     */
    public function generateCode(): string{
        $this->code = uniqid("utilisateur-")."-".time();
        return $this->code;
    }
}