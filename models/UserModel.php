<?php


class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($userId)
    {
        $sql = '
        SELECT 
            id
            ,login
            ,forename
            ,surname
            ,sex 
        FROM 
            users 
        WHERE 
            id = :userid
        ';
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':userid' => $userId));
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
