<?php

include __DIR__ . "/../config/db.inc";

class DbEngine
{
    public function setUser($login, $pass, $email, $regtime)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO users (login, pass, email, regtime) VALUES (:login, :pass, :email, :regtime)";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":login", $login);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":regtime", $regtime);
        $statement->execute();
    }

    public function checkLogin($login)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT login FROM users WHERE login = :login";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":login", $login);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function checkEmail($email)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT email, pass FROM users WHERE email = :email";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function resetPass($pass, $email)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE users SET pass = :pass, reset = NULL WHERE email = :email";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pass", $pass);
        $statement->execute();
    }

    public function getUserData($login, $password)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT login, pass FROM users WHERE login = :login AND pass = :pass";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":login", $login);
        $statement->bindParam(":pass", $password);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function setFlag($pass)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE users SET reset = 'ok' WHERE pass = :pass";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":pass", $pass);
        $statement->execute();
    }

    public function getFlag($email)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT email FROM users WHERE email = :email AND reset = 'ok'";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function resetFlag($login)
    {
        $connection =
            new PDO(DB_URL, USER, PWD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE users SET reset = NULL WHERE login = :login";
        $statement = $connection->prepare($sql);
        $statement->bindParam(":login", $login);
        $statement->execute();
    }


}
