<?php
class PasswordPlatforms
{
    private $conn;
    private $table = 'password_platforms';

    public function __construct($db)
    {
        $this->conn = $db;
    }
//private function starting
    private function execQuery($query, $params, $fetch = null)
    {
        $stmt = $this->conn->prepare($query);
        foreach ($params as $key => $val) {
            $stmt->bindValue(":$key", $val);
        }
        if ($stmt->execute()) {
            if ($fetch === 'all') return $stmt->fetchAll(PDO::FETCH_OBJ);
            if ($fetch === 'one') return $stmt->fetchObject();
            return true;
        }
        return false;
    }

    public function savePasswordRecord($username, $platform, $password)
    {
        return $this->execQuery(
            "INSERT INTO $this->table (username, platform_name, password) VALUES (:username, :platform, :password)",
            compact('username', 'platform', 'password')
        );
    }

    public function updatePasswordRecord($id, $platform, $password)
    {
        return $this->execQuery(
            "UPDATE $this->table SET platform_name = :platform, password = :password WHERE id = :id",
            compact('id', 'platform', 'password')
        );
    }

    public function deletePasswordRecord($id)
    {
        return $this->execQuery("DELETE FROM $this->table WHERE id = :id", compact('id'));
    }

    public function userPasswords($username)
    {
        return $this->execQuery("SELECT * FROM $this->table WHERE username = :username", compact('username'), 'all');
    }

    public function verifyPasswordwithUsername($id, $username
