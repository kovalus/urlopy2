<?php


class RegisterModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function saveUser($p)
    {

        //$p = $this->valudateUser($p);
        $this->insertUser($p);
    }

    private function insertUser($p)
    {
        $sql = '
        INSERT INTO `users` (
            `login`,
            `password`,
            `forename`,
            `surname`,
            `sex`
        ) VALUES (
            ' . $this->db->quote($p['login']) . '
            ,' . $this->db->quote(Hash::create(PASSWORD_ENCRYPTION, $p['passwd'], HASH_KEY)) . '
            ,' . $this->db->quote($p['forename']) . '
            ,' . $this->db->quote($p['surname']) . '
            ,' . $this->db->quote($p['sex']) . '
        );';
        $sth = $this->db->prepare($sql);
        return $sth->execute();
    }

    private function valudateUser($p)
    {
        return $p;
    }
}
