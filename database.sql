CREATE TABLE artist(
	artist_id smallint(5) NOT NULL AUTO_INCREMENT,
	artist_name char(128) NOT NULL,
	PRIMARY KEY	(artist_id)	
);

CREATE TABLE member (
	member_id int(11) NOT NULL AUTO_INCREMENT,
	member_nama varchar(100) NOT NULL,
	member_phone varchar(20) NOT NULL,
	member_level smallint(6) NOT NULL DEFAULT 0,
	member_password varchar(100) NOT NULL,
	status ENUM('Y','T') NOT NULL DEFAULT 'T',
	PRIMARY KEY (member_id),
	UNIQUE KEY (member_nama)

);


CREATE TABLE album (
	album_id smallint(4) NOT NULL AUTO_INCREMENT,
	artist_id smallint(5) NOT NULL,
	album_name char(128) NOT NULL,
	PRIMARY KEY (album_id),
	FOREIGN KEY (artist_id) REFERENCES artist(artist_id)
);

CREATE TABLE track (
	track_id smallint(3) NOT NULL AUTO_INCREMENT,
	track_name char(128) NOT NULL,
	artist_id smallint(5) NOT NULL,
	album_id smallint(4) NOT NULL,
	time decimal(5,2) NOT NULL,
	PRIMARY KEY (track_id),
	FOREIGN KEY (artist_id) REFERENCES artist(artist_id),
	FOREIGN KEY (album_id) REFERENCES album(album_id)
);

CREATE TABLE played (
	artist_id smallint(5) NOT NULL,
	album_id smallint(4) NOT NULL,
	track_id smallint(3) NOT NULL,
	played timestamp NOT NULL,
	PRIMARY KEY (played),
	FOREIGN KEY (artist_id) REFERENCES artist(artist_id),
	FOREIGN KEY (album_id) REFERENCES album(album_id),
	FOREIGN KEY (track_id) REFERENCES track(track_id)
);

