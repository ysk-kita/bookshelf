SELECT
  *
FROM
  accounts
WHERE
  user_id = :user_id
  AND password = :password
;
