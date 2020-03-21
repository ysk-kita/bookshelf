create table kitabooks.genre (
  genre_id VARCHAR(3),
  genre_name TEXT,
  genre_path VARCHAR(50) UNIQUE,
  PRIMARY KEY(genre_id)
) CHARSET=utf8;
