SELECT
  *
FROM
  accounts
WHERE
  account_id = :account_id
  AND password = :password
;
