create table kitabooks.bookmarks (
  bookmarks_id MEDIUMINT AUTO_INCREMENT,
  user_id VARCHAR(16) NOT NULL,
  book_id MEDIUMINT NOT NULL,
  shelf_id VARCHAR(2) NOT NULL,
  PRIMARY KEY (bookmarks_id),
  UNIQUE (user_id, book_id)
) CHARSET=utf8;
