use usal37_tp_bank;

CALL transfer(-400, 30, 31);
CALL transfer(400, 30, 31);
CALL transfer(400, 30, 31);

SELECT * FROM accounts;