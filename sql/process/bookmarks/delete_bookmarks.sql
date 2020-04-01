DELETE
FROM
  bookmarks
WHERE
  user_id = :user_id
  AND book_id = :book_id
  AND shelf_id = :shelf_id
