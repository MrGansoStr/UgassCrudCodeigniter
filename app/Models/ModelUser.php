<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    public function getUsers() {
        $result = $this->db->query('SELECT id_user, Fname, LnameP, LnameM, dni, username, password, email, phone, address, type FROM users;')->getResultArray();
        return $result;
    }

    public function loginAccount($codeconexion, $lnamep) {
        $ResultUser = $this->db->query('SELECT a.id_user, a.user_rol, a.Fname, LOWER(a.LnameP) AS LnameP, a.LnameM, a.email, b.code_conexion, b.state FROM users a JOIN receipts b ON a.id_user = b.id_user_child WHERE b.code_conexion = ? AND a.LnameP = ?;',[$codeconexion, $lnamep])->getResultArray();
        return $ResultUser;
    }

    public function getUserId($userid) {
        $result = $this->db->query('SELECT * FROM users WHERE id_user ?;', [$userid])->getREsultArray();
        return $result;
    }

    public function updateUser($data) {
        $result = $this->db->query('UPDATE users SET Fname=?, LnameP = ?, LnameM = ?, dni = ?, email = ?, phone = ?, address = ? WHERE id_user = ?;',[ $data['newfname'], $data['newlnamep'], $data['newlnamem'], $data['newdni'], $data['newemail'], $data['newphone'], $data['newaddress'], $data['newid'],]);
        return $result;
    }

    public function deleteUser($userid) {
        $result = $this->db->query('DELETE FROM users WHERE id_user = ?;', [$userid]);
        return $result;
    }

    public function existsUser($dni) {
        $result = $this->db->query('SELECT dni FROM users WHERE dni = ?', [$dni])->getResultArray();
        return $result;
    }
    public function createUser($data) {
        $result = $this->db->query('INSERT INTO users (id_user, user_rol, Fname, LnameP, LnameM, dni, username, password, email, phone, address, type, id_service_child) VALUES (default, ?, ?, ?, ?, ?, "user", "pass", ?, ?, ?, "personnal", 5);', [(int)$data['user_rol'], $data['fname'], $data['lnamep'], $data['lnamem'], $data['dni'], $data['email'], $data['phone'], $data['address']]);
        return $result;
    }

    public function searchUserByDNI($dni) {
        $result = $this->db->query('SELECT id_user, Fname, LnameP, dni FROM users WHERE dni = ?;', [$dni])->getResultArray();
        return $result;
    }

}