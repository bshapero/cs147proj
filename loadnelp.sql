/* Delete the tables if they already exist */

drop table if exists Users;
drop table if exists Reviews;
drop table if exists Sites;
drop table if exists Likes;
drop table if exists Bookmarks;


/* Create the schema for our tables */

create table Users(user_id int, email text, pswd text, user_picture text, user_name text);
create table Reviews(review_id int, written_review text, user_name text, star_rating int, num_likes int, site_id int, date_created datetime);
create table Sites(site_id int, site_url text, num_reviews int, sum_score int, site_picture text, category text);
create table Likes(user_id int, review_id int);
create table Bookmarks(user_id int, review_id int);


/* Populate the tables with our data */

insert into Users values(1, 'jneighbs88@gmail.com', '736b19f69aaca691fecd8400294cc383', null, null);
insert into Users values(2, 'ryanr2013@gmail.com', '10c7ccc7a4f0aff03c915c485565b9da', null, null);
insert into Users values(3, 'mrwunderboy@gmail.com', '7fe4771c008a22eb763df47d19e2c6aa', "ben.JPG", null);

insert into Reviews values(1, 'Review numero uno', 'jneighbs88@gmail.com', 5, 0, 1, '2012-10-21 08:30:10');
insert into Reviews values(2, 'Review numero dos', 'ryanr2013@gmail.com', 1, 0, 1, '2012-10-22 04:33:40');
insert into Reviews values(3, 'Review numero treis', 'mrwunderboy@gmail.com', 3, 0, 1, '2012-10-22 08:42:11');

insert into Sites values (1, 'http://www.fox.com/', 3, 9, null, "News");

insert into Likes values (1, 3);
insert into Likes values (2, 3);
insert into Likes values (3, 2);

insert into Bookmarks values (1,1);
insert into Bookmarks values (3,1);