<?php
class User {
    public $_db, $_data;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function create($fields = array()) {
        if (!$this->_db->insert('users', $fields)) {
            throw new Exception('There was a problem creating an account.');
        }
    }

    public function find($user = null) {
        if ($user) {
            $field = (is_numeric($user)) ? 'id' : 'username';
            $data = $this->_db->get('users', array($field, '=', $user));
            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login($username = null, $password = null) {
        $user = $this->find($username);
        if ($user) {
            if ($user->password === Hash::make($password, $user->salt)) {
                Session::put($user->username, $user->id);
                return true;
            }
        }
        return false;
    }
}