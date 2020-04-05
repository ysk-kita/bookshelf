SELECT
  episode_no
FROM
  book_details
WHERE
  book_id = :book_id
ORDER BY
  episode_no DESC
LIMIT 1
;
