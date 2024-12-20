<?php

require_once 'inc/config.inc.php';

require_once 'inc/Entity/Income.class.php';
require_once 'inc/Entity/Page.php';
require_once 'inc/Entity/Withdrawal.class.php';

require_once 'inc/Utility/IncomeDAO.class.php';
require_once 'inc/Utility/WithdrawalDAO.class.php';
require_once 'inc/Utility/PDOService.class.php';

IncomeDAO::init();
WithdrawalDAO::init();

$balance = 0;
$totalIncome = 0;
$totalWithdrawals = 0;

try {
    $incomes= IncomeDAO::getIncomes();
    $withdrawals = WithdrawalDAO::getWithdrawals();
} catch(PDOException $e) {
    error_log($e->getMessage());
    error_log("Balance error");
}


foreach ($incomes as $income) {
    $totalIncome = $totalIncome + $income->getAmount();
}
foreach ($withdrawals as $withdrawal) {
    $totalWithdrawals = $totalWithdrawals + $withdrawal->getAmount();
}

$balance = $totalIncome - $totalWithdrawals;
$mydate=getdate(date("U"));
$mydate2 = "$mydate[year]-$mydate[mon]-$mydate[mday]";

if (!empty($_POST)) {
    if ($_POST["action"] == "Deposit" && $_POST["money"] > 0) {
        $ni = new Income();
        $ni->setAmount($_POST["money"]);
        $ni->setDate($mydate2);
        IncomeDAO::createIncome($ni);
        header("Refresh: 0");
    }
    elseif ($_POST["action"] == "Withdraw" && $_POST["money"] > 0 ) {
        $nw = new Withdrawal();
        $nw->setAmount($_POST["money"]);
        $nw->setDate($mydate2);
        WithdrawalDAO::createWithdrawal($nw);
        header("Refresh: 0");

    }
    else {

    }
}

Page::header($balance);



