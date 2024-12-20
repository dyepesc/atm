<?php

/*
+----+----------------------------------------------------------------+-------------+------------+------------+--------+--------------+---------------+
| id | course_name                                                    | category    | avg_rating | enrollment | price  | num_lectures | course_length |
+----+----------------------------------------------------------------+-------------+------------+------------+--------+--------------+---------------+
|  1 | Complete Salesforce Certified Platform Developer I Course      | it software |       4.50 |       1052 |  16.99 |           63 | 12h 2m        |
|  2 | Fundamentals of Electrical Controls                            | business    |       4.60 |       3688 |  16.99 |           45 | 3h 55m        |
|  3 | Build Native iOS Android and Web Apps with Angular             | development |       4.40 |       6096 |  34.99 |           65 | 8h 39m        |
|  4 | MTA Networking Fundamentals Exam                               | it software |       4.40 |       1497 |  21.99 |          124 | 16h 11m       |
|  5 | Projects in Machine Learning Beginner To Professional          | development |       4.10 |       2329 |  17.99 |          139 | 6h 35m        |
|  6 | Microsoft Windows 10 Fundamentals                              | it software |       3.50 |        713 | 149.99 |           47 | 11h 14m       |
|  7 | The Complete Guide of Postman for REST API Testing             | development |       4.70 |      11522 |  21.99 |           73 | 11h 25m       |
|  8 | Linux Command Line Basics                                      | it software |       4.10 |       5508 |  21.99 |           65 | 3h 8m         |
|  9 | Certified Six Sigma Black Belt Training                        | business    |       4.60 |      88286 |  17.99 |           54 | 3h 39m        |
| 10 | The Complete Angular Course from Beginner to Advanced          | development |       4.50 |      28242 |  16.99 |           37 | 1h 50m        |
| 11 | UiPath RPA Level 2                                             | design      |       4.70 |       7041 |  16.99 |           56 | 9h 3m         |
| 12 | Master Course in Tableau 10 and 2020 for Business Intelligence | business    |       3.70 |       3161 |  16.99 |           45 | 6h 36m        |
+----+----------------------------------------------------------------+-------------+------------+------------+--------+--------------+---------------+
*/


class Income
{

    //Attributes
    private $id;
    private $date;
    private $amount;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }





}
