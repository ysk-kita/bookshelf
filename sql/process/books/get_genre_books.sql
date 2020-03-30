SELECT
  book_id,
  book_title,
  synopsis,
  cover_img
FROM
  books
WHERE
  genre_id = :genre_id
;
