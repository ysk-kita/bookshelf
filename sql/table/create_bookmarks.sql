create table kitabooks.bookmarks (
  bookmarks_id MEDIUMINT AUTO_INCREMENT,
  account_id VARCHAR(16) NOT NULL,
  book_id MEDIUMINT NOT NULL,
  PRIMARY KEY (bookmarks_id)
) CHARSET=utf8;