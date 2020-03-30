SELECT
  count(*)
FROM
  accounts
WHERE
  user_id = :user_id
;
