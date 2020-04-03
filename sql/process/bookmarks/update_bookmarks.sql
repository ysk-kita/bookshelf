UPDATE
  kitabooks.bookmarks
SET
  shelf_id = :shelf_id
WHERE
  user_id = :user_id
  AND book_id = :book_id
;
