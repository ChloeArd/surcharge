<?php

class Admin extends Utilisateur {
    protected const TEST = "yoyo";
    private array $bannedUsers = [];
    protected string $code;

    public function generateCode(): string {
        return str_replace("utilisateur", "admin",parent::generateCode());
        //$this->code = uniqid("admin-")."-".time();
        //return $this->code;
    }

    public function display() {
        echo "<p>".self::TEST."</p>";
        echo "<p>".Admin::TEST."</p>";

        echo "<p>".parent::TEST."</p>";
        echo "<p>".Utilisateur::TEST."</p>";

    }
}