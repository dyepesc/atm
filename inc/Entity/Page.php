<?php

class Page {

    static function header($balance) {?>

        <!doctype html>
        <html>
        <head>
            <title>ATM</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="/css/atm.css">
            <!--    <script src="atm.js"></script>-->
        </head>
        <body>
        <div id="content">
            <div id="nav">
                <div id="logo"><img src="/assets/ga.png" alt="Bank of GA"/></div>
                <div id="title">Bank of Platzi</div>
            </div>
            <div class="account" id="checkingAccount">
                <form action="" method="post">
                    <h1>Checking</h1>
                    <div class="balance" id="balance1"><?= "$".number_format($balance, 2)  ?></div>
                    <input id="checkingAmount" type="text" name="money" placeholder="enter an amount" />
<!--                    <input id="checkingDeposit" type="hidden" name="action" value="money" />-->
                    <input id="checkingDeposit" type="submit"  name="action"  value="Deposit" />
<!--                    <input id="checkingWithdraw" type="hidden" name="action" value="withdraw" />-->
                    <input id="checkingWithdraw" type="submit" name="action"  value="Withdraw" />
                </form>

            </div>

            <div class="clear"></div>
        </div>
        </body>
        </html>

<?php


    }


}
