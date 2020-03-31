SELECT
  count(*)
FROM
  bookmarks
WHERE
  user_id = :user_id
  AND book_id = :book_id
;
