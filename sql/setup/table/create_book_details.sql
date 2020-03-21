create table kitabooks.book_details (
  book_id MEDIUMINT,
  episode_no INTEGER,
  episode_title VARCHAR(50),
  episode_text TEXT,
  PRIMARY KEY (book_id, episode_no),
  FOREIGN KEY (book_id) REFERENCES books(book_id)
) CHARSET=utf8;
