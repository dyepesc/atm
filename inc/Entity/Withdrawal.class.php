<?php
/*
+----+--------------+------------+--------------------------------------------------------------+
| id | full_name    | username   | password                                                     |
+----+--------------+------------+--------------------------------------------------------------+
|  1 | Quiz 2 Admin | quiz2admin | $2y$10$zSLik5ae2N79wd0uJlAT.ORmY6.buukaKBn/3dsTnVI059gr.hgSe |
+----+--------------+------------+--------------------------------------------------------------+
*/

class Withdrawal
{

    //Attributes
    private $id;
    private $date;
    private $amount;

   public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }




}
