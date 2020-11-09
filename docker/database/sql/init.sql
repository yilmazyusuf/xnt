CREATE TABLE posts
(
    id          INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title       VARCHAR(100) NOT NULL,
    slug        VARCHAR(100) NOT NULL,
    content     TEXT,
    is_headline TINYINT(3),
    user_id     INTEGER(11) UNSIGNED,
    created_at  DATETIME     NOT NULL,
    updated_at  DATETIME
) ENGINE=MyISAM;