SELECT
  book_id,
  book_title,
  synopsis,
  total_episodes,
  cover_img
FROM
  books
WHERE
  book_id = :book_id
;
