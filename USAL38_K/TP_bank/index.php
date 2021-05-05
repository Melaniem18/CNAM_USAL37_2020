<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Manager</title>
</head>
<body>
    <header>
        <h1>Bank Manager</h1>
    </header>
    <main>

    <?php

        $dsn = 'mysql: host=localhost; port=3306; dbname=usal37_tp_bank; charset=utf8';

        $pdo = new PDO($dsn, 'root', ''); //PHP Data Objects

        $statement = $pdo->query("SELECT * FROM banks WHERE bank_id=1002;"); //requête

        $bank = $statement->fetch(); // récupére les données

        echo $bank['bank_name'];
        echo '<br>';
        echo $bank[0];
        echo '<br>';

        // echo '<pre>' . var_export($banks, true); // exporte les résultats

        echo 'Hello World';
        echo '<br>';


        $statement = $pdo->query("SELECT account_id, account_owner, account_balance, bank_name 
        FROM accounts INNER JOIN banks ON banks.bank_id = accounts.bank_id
        WHERE account_id > 20;");

        $accounts = $statement->fetchAll();

        foreach($accounts as $oneaccount){
            echo $oneaccount['account_owner'];
            echo ' - ';
            echo $oneaccount['bank_name'];
            echo '<br>';
        }


    ?>

    </main>
    <footer>
    </footer>
</body>
</html>