<?php

// nothing to be done here

class WithdrawalDAO   {

    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOService("Withdrawal");
    }    

    static function getUser(string $userName)  {
        
        $selectSQL = "SELECT * FROM users WHERE username = :username;";
        
        self::$db->query($selectSQL);
        self::$db->bind(":username", $userName);
        self::$db->execute();
        return self::$db->singleResult();

    }

    static function getTotalWithdrawals()  {

        $selectSQL = "SELECT SUM(amount) as totalW FROM withdrawals ";

       self::$db->query($selectSQL);

        self::$db->execute();
        return self::$db->singleResult();

    }

    static function getWithdrawals(string $sortby=null, string $sort=null) {
        $selectSQL = "SELECT * FROM withdrawals";
        if($sortby){
            $selectSQL .= " ORDER BY ".$sortby;
            if($sort)
                $selectSQL .= " ".$sort;
        }
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->multipleResult();

    }

    static function createWithdrawal(Withdrawal $newWithdrawal) {

        // QUERY BIND EXECUTE
        // You may want to return the last inserted id
        $sqlInsert = "INSERT INTO withdrawals (date, amount) VALUES (:date, :amount)";

        self::$db->query($sqlInsert);

        self::$db->bind(':date', $newWithdrawal->getDate());
        self::$db->bind(':amount', $newWithdrawal->getAmount());
        self::$db->execute();

    }

}