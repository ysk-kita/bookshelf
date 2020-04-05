SELECT
  book_id,
  episode_no,
  episode_title,
  episode_text
FROM
  book_details
WHERE
  book_id = :book_id
  AND episode_no = :episode_no
;
