<?php
declare(strict_types=1);

class User {
    private PDO $conn;
    private string $table_name = 'users';

    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    
    public function signup(string $username, string $password): bool {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO {$this->table_name} (username, password) VALUES (:username, :password)";
        $stmt = $this->conn->prepare($query);

        $stmt = pass

        return $stmt->execute();
    }

    
    public function login(string $username, string $password): bool {
        $query = "SELECT password FROM {$this->table_name} WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user && password_verify($password, $user['password']);
    }

  
    public function changePassword(string $username, string $newPassword): bool {
        $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

        $query = "UPDATE {$this->table_name} SET password = :password WHERE username = :username";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':username', $username);

        return $stmt->execute();
    }
}
?>
