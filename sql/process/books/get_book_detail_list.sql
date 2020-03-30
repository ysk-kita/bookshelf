SELECT
  episode_no,
  episode_title
FROM
  book_details
WHERE
  book_id = :book_id
ORDER BY
  episode_no ASC
;
