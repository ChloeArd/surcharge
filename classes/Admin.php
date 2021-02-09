<?php

class Admin extends Utilisateur {
    private static int $instancesCount = 0;
    protected const TEST = "yoyo";
    private array $bannedUsers = [];
    protected string $code;

    /**
     * Admin constructor.
     * @param string $nom
     */
    public function __construct(string $nom) {
        parent::__construct($nom);
        self::instancePlus();
    }

    public function generateCode(): string {
        return str_replace("utilisateur", "admin",parent::generateCode());
        //$this->code = uniqid("admin-")."-".time();
        //return $this->code;
    }

   /** public function display() {
        echo $this->setNom("toto")->getNom();
        //Fera la même chose (sur la classe enfant, Admin).
        echo "<p>".self::TEST."</p>";
        echo "<p>".Admin::TEST."</p>";

        //Sur la classe parent.
        echo "<p>".parent::TEST."</p>";
        echo "<p>".Utilisateur::TEST."</p>";
    }
    * */

    /**
     * Tentative de surcharge.
     * @return string
     */
    public function getNom(): string {
        return "Goute ".parent::getNom();
    }

    /**
     *  Add 1 instance count
     */
    public static function instancePlus() {
        self::$instancesCount++;
    }

    /**
     * Return instances count
     * @return int
     */
    public static function getInstancesCount() {
        return self::$instancesCount;
    }
}