<?php


class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function loginUser($p)
    {
        $user = $this->checkLoginPasswd($p['login'], $p['passwd']);

        if (!empty($user)) {
            Session::init();
            Session::set('loggedIn', true);
            Session::set('login', $user['login']);
            Session::set('id', $user['id']);
            return $user['id'];
        }
        return '';
    }

    private function checkLoginPasswd($login, $passwd)
    {
        $sql = 'SELECT id, login FROM users WHERE login = :login AND password = :password';
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':login' => $login, ':password' => Hash::create(PASSWORD_ENCRYPTION, $passwd, HASH_KEY)));
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
}
