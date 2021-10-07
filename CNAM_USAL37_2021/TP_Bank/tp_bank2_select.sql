USE usal37_tp_bank;

SELECT * FROM banks;

SELECT * FROM accounts;

SELECT account_id, account_balance FROM accounts WHERE account_id = 20;

SELECT account_id, account_balance 
FROM accounts
WHERE (account_balance < 3000 OR account_id < 20) AND account_owner LIKE 'M%';

SELECT account_id, account_owner, account_balance, bank_name
FROM accounts, banks WHERE banks.bank_id = accounts.bank_id;

SELECT account_id, account_owner, account_balance, bank_name
FROM  accounts
JOIN banks ON banks.bank_id = accounts.bank_id;

SELECT account_id, account_owner, account_balance, bank_name
FROM  accounts
LEFT JOIN banks ON banks.bank_id = accounts.bank_id;

SELECT account_id, account_owner, account_balance, bank_name
FROM  accounts
RIGHT JOIN banks ON banks.bank_id = accounts.bank_id;

SELECT * FROM accounts
WHERE account_id > 10
ORDER BY bank_id DESC, acccount_balance ASC, account_owner ASC
;

SELECT * FROM accounts
WHERE account_id > 10
ORDER BY acccount_balance DESC
LIMIT 2,10
;

UPDATE accounts SET account_balance = 3900 WHERE account_id = 11 LIMIT 1;







