<?php

class IncomeDAO   {

    private static $db;

    static function init()  {
        //Initialize the internal PDO Service
        self::$db = new PDOService("Income");
    }
    
    static function getIncome(int $id)  {

        $selectSQL = "SELECT * FROM incomes WHERE id=:id";
        self::$db->query($selectSQL);
        self::$db->bind(':id', $id);
        self::$db->execute();
        return self::$db->singleResult();    

    }

    static function getTotalIncome()  {

        $selectSQL = "SELECT SUM(amount) as totalI  FROM incomes ";
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->singleResult();

    }

    static function getIncomes(string $sortby=null, string $sort=null)  {

        $selectSQL = "SELECT * FROM incomes";
        if($sortby){
            $selectSQL .= " ORDER BY ".$sortby;
            if($sort)
                $selectSQL .= " ".$sort;
        }
        self::$db->query($selectSQL);
        self::$db->execute();
        return self::$db->multipleResult();    

    }

    static function createIncome(Income $newIncome) {

        // QUERY BIND EXECUTE
        // You may want to return the last inserted id
        $sqlInsert = "INSERT INTO incomes (date, amount) VALUES (:date, :amount)";

        self::$db->query($sqlInsert);

        self::$db->bind(':date', $newIncome->getDate());
        self::$db->bind(':amount', $newIncome->getAmount());
        self::$db->execute();

    }
    
}