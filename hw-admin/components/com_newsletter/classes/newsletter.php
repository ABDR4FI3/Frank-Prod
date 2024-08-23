<?php
class newsletter
{

    static $table =  __prefixe_db__ . "newsletter";

    private $id = 0;
    private $nom;
    private $email;
    private $confirm;
    private $date_add;

    public function __construct()
    {
        $this->id = 0;
    }

    public function __destruct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function isConfirm()
    {
        return $this->confirm  ? 1 : 0;
    }

    public function getDateAdd()
    {
        return $this->date_add;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
    }

    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
    }

    public function delete()
    {
        global $db;
        $SQLdelete = sprintf("DELETE FROM " . static::$table . " WHERE id = %s", GetSQLValueString($this->getId(), "int"));

        if (!$db->query($SQLdelete)) {
            return 1;
        } else
            return 0;
    }

    public static function find($id)
    {
        global $db;
        $newsletter = new newsletter();
        $SQLselect = sprintf(
            $SQLselect = "SELECT * FROM " . static::$table . " WHERE id = %s",
            GetSQLValueString($id, "int")
        );
        $result = $db->query($SQLselect);
        if ($db->num_rows($result) == 1) {
            $data = $db->fetch_assoc($result);
            $newsletter = static::build($data);
        }
        return $newsletter;
    }

    public static function findAll()
    {
        global $db;
        $items = array();
        $newsletter = new newsletter();
        $SQLselect = "SELECT * FROM " . static::$table;
        $result = $db->queryS($SQLselect);
        foreach ($result as $data) {
            $newsletter = static::build($data);
            array_push($items, $newsletter);
        }

        return $items;
    }

    public static function build($data)
    {

        $newsletter = new newsletter();
        $newsletter->setId($data['id']);
        $newsletter->setNom($data['nom']);
        $newsletter->setEmail($data['email']);
        $newsletter->setConfirm($data['confirm']);
        $newsletter->setDateAdd($data['date_add']);
        return $newsletter;
    }
}
