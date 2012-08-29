--Drop ForeignKeys

ALTER TABLE #__jclan_player_lineup   DROP CONSTRAINT jclan_player_lineup_FK1 ;

ALTER TABLE #__jclan_player_lineup   DROP CONSTRAINT jclan_player_lineup_FK2 ;

ALTER TABLE #__jclan_player_lineup   DROP CONSTRAINT jclan_player_lineup_FK3 ;

ALTER TABLE #__jclan_players   DROP CONSTRAINT team_Players_FK ;

ALTER TABLE #__jclan_position   DROP CONSTRAINT jclan_position_FK1 ;

ALTER TABLE #__jclan_match   DROP CONSTRAINT jclan_match_FK1 ;

ALTER TABLE #__jclan_match   DROP CONSTRAINT jclan_match_FK2 ;

ALTER TABLE #__jclan_match   DROP CONSTRAINT jclan_match_FK3 ;

ALTER TABLE #__jclan_match   DROP CONSTRAINT jclan_match_FK4 ;

ALTER TABLE #__jclan_game_map   DROP CONSTRAINT jclan_game_map_FK1 ;

ALTER TABLE #__jclan_lineup   DROP CONSTRAINT jclan_lineup_FK1 ;


--Drop Primary Keys

ALTER TABLE #__jclan_player_lineup  DROP CONSTRAINT jclan_player_lineup_PK ;

ALTER TABLE #__jclan_players  DROP CONSTRAINT jclan_players_PK ;

ALTER TABLE #__jclan_position  DROP CONSTRAINT jclan_position_PK ;

ALTER TABLE #__jclan_team  DROP CONSTRAINT jclan_team_PK ;

ALTER TABLE #__jclan_season  DROP CONSTRAINT jclan_season_PK ;

ALTER TABLE #__jclan_match  DROP CONSTRAINT jclan_match_PK ;

ALTER TABLE #__jclan_game  DROP CONSTRAINT jclan_game_PK ;

ALTER TABLE #__jclan_game_map  DROP CONSTRAINT jclan_game_map_PK ;

ALTER TABLE #__jclan_lineup  DROP CONSTRAINT jclan_lineup_PK ;

--###########
--Drop Tables
--############
DROP TABLE IF EXISTS #__jclan_player_lineup;
DROP TABLE IF EXISTS #__jclan_players;
DROP TABLE IF EXISTS #__jclan_position;
DROP TABLE IF EXISTS #__jclan_team;
DROP TABLE IF EXISTS #__jclan_season;
DROP TABLE IF EXISTS #__jclan_match;
DROP TABLE IF EXISTS #__jclan_game;
DROP TABLE IF EXISTS #__jclan_game_map;
DROP TABLE IF EXISTS #__jclan_lineup;


--###########
--Create Tables
--############
CREATE TABLE #__jclan_player_lineup (
line_up_id CHAR(10)  NOT NULL  
, player_ID INTEGER  NOT NULL  
, position_id VARCHAR(50)  NULL  
, game_name VARCHAR(50)  NULL  
);


CREATE TABLE #__jclan_players (
player_ID INTEGER  NOT NULL  
, nickname CHAR(100)  NOT NULL  
, steam_id CHAR(50)  NULL  
, team_id VARCHAR(100)  NOT NULL  
);

CREATE TABLE #__jclan_position (
game_name VARCHAR(50)  NOT NULL  
, position_id VARCHAR(50)  NOT NULL  
, image VARCHAR(100)  NULL  
);

CREATE TABLE #__jclan_team (
team_name VARCHAR(50)  NOT NULL  
, entry_date DATETIME  NULL  
, homepage CHAR(100)  NULL  
);

CREATE TABLE #__jclan_season (
season_name VARCHAR(50)  NOT NULL  
);

CREATE TABLE #__jclan_match (
match_id INTEGER  NOT NULL  
, match_date DATETIME  NOT NULL  
, home_name VARCHAR(50)  NOT NULL  
, visitor_name VARCHAR(50)  NOT NULL  
, home_score DECIMAL(10,2)  NULL  
, visitor_score DECIMAL(10,2)  NULL  
, game_name VARCHAR(50)  NOT NULL  
, map_name VARCHAR(50)  NOT NULL  
, played BIT  NULL  
, season_name VARCHAR(50)  NULL  
);

CREATE TABLE #__jclan_game (
game_name VARCHAR(50)  NOT NULL  
, homepage VARCHAR(100)  NULL  
);

CREATE TABLE #__jclan_game_map (
game_name VARCHAR(50)  NOT NULL  
, map_name VARCHAR(50)  NOT NULL  
, image VARCHAR(255)  NULL  
);

CREATE TABLE #__jclan_lineup (
line_up_id CHAR(10)  NOT NULL  
, team_name VARCHAR(50)  NULL  
);

--###########
--Create Primary Keys
--############

ALTER TABLE #__jclan_player_lineup ADD CONSTRAINT jclan_player_lineup_PK PRIMARY KEY  (
line_up_id
, player_ID
);

ALTER TABLE #__jclan_players ADD CONSTRAINT jclan_players_PK PRIMARY KEY  (
player_ID
);

ALTER TABLE #__jclan_position ADD CONSTRAINT jclan_position_PK PRIMARY KEY  (
position_id
, game_name
);

ALTER TABLE #__jclan_team ADD CONSTRAINT jclan_team_PK PRIMARY KEY  (
team_name
);

ALTER TABLE #__jclan_season ADD CONSTRAINT jclan_season_PK PRIMARY KEY  (
season_name
);

ALTER TABLE #__jclan_match ADD CONSTRAINT jclan_match_PK PRIMARY KEY  (
match_id
);

ALTER TABLE #__jclan_game ADD CONSTRAINT jclan_game_PK PRIMARY KEY  (
game_name
);

ALTER TABLE #__jclan_game_map ADD CONSTRAINT jclan_game_map_PK PRIMARY KEY  (
game_name
, map_name
);

ALTER TABLE #__jclan_lineup ADD CONSTRAINT jclan_lineup_PK PRIMARY KEY  (
line_up_id
);

--###########
--Create Foreign Keys
--############

ALTER TABLE #__jclan_player_lineup   ADD CONSTRAINT jclan_player_lineup_FK1 FOREIGN KEY (
line_up_id
)
REFERENCES #__jclan_lineup (
line_up_id
);

ALTER TABLE #__jclan_player_lineup   ADD CONSTRAINT jclan_player_lineup_FK2 FOREIGN KEY (
player_ID
)
REFERENCES #__jclan_players (
player_ID
);

ALTER TABLE #__jclan_player_lineup   ADD CONSTRAINT jclan_player_lineup_FK3 FOREIGN KEY (
position_id
, game_name
)
REFERENCES #__jclan_position (
position_id
, game_name
);

ALTER TABLE #__jclan_players   ADD CONSTRAINT team_Players_FK FOREIGN KEY (
team_id
)
REFERENCES #__jclan_team (
team_name
);

ALTER TABLE #__jclan_position   ADD CONSTRAINT jclan_position_FK1 FOREIGN KEY (
game_name
)
REFERENCES #__jclan_game (
game_name
);

ALTER TABLE #__jclan_match   ADD CONSTRAINT jclan_match_FK1 FOREIGN KEY (
season_name
)
REFERENCES #__jclan_season (
season_name
);

ALTER TABLE #__jclan_match   ADD CONSTRAINT jclan_match_FK2 FOREIGN KEY (
home_name
)
REFERENCES #__jclan_team (
team_name
);

ALTER TABLE #__jclan_match   ADD CONSTRAINT jclan_match_FK3 FOREIGN KEY (
visitor_name
)
REFERENCES #__jclan_team (
team_name
);

ALTER TABLE #__jclan_match   ADD CONSTRAINT jclan_match_FK4 FOREIGN KEY (
game_name
, map_name
)
REFERENCES #__jclan_game_map (
game_name
, map_name
);

ALTER TABLE #__jclan_game_map   ADD CONSTRAINT jclan_game_map_FK1 FOREIGN KEY (
game_name
)
REFERENCES #__jclan_game (
game_name
);

ALTER TABLE #__jclan_lineup   ADD CONSTRAINT jclan_lineup_FK1 FOREIGN KEY (
team_name
)
REFERENCES #__jclan_team (
team_name
);



