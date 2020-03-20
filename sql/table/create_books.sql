create table kitabooks.books (
  book_id MEDIUMINT AUTO_INCREMENT,
  book_title VARCHAR(100) unique,
  synopsis VARCHAR(300),
  total_episodes INTEGER,
  cover_img TEXT,
  genre_id VARCHAR(3),
  PRIMARY KEY (book_id),
  FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
) CHARSET=utf8;
