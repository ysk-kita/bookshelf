SELECT
  b.book_id,
  b.book_title,
  b.cover_img,
  b.synopsis
FROM
  bookmarks as bm
INNER JOIN
  books as b
ON
  bm.book_id = b.book_id
WHERE
  bm.user_id = :user_id
AND
  bm.shelf_id = :shelf_id
;
