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
insert into Users values(3, 'mrwunderboy@gmail.com', '7fe4771c008a22eb763df47d19e2c6aa', "ben.jpg", null);

insert into Reviews values(1, 'Review numero uno', 'jneighbs88@gmail.com', 5, 0, 1, '2012-10-21 08:30:10');
insert into Reviews values(2, 'Review numero dos', 'ryanr2013@gmail.com', 1, 0, 1, '2012-10-22 04:33:40');
insert into Reviews values(3, 'Review numero treis', 'mrwunderboy@gmail.com', 3, 0, 1, '2012-10-22 08:42:11');

insert into Sites values (1, 'http://www.foxnews.com/', 3, 9, null, "News");
insert into Sites values (2, 'http://abcnews.go.com/', 0, 0, null, "News");
insert into Sites values (3, 'http://www.cnn.com/', 0, 0, null, "News");
insert into Sites values (4, 'http://www.nbcnews.com/', 0, 0, null, "News");
insert into Sites values (5, 'http://www.facebook.com/', 0, 0, null, "Social Media");
insert into Sites values (6, 'http://www.healthcare.gov/', 0, 0, null, "Health Care");
insert into Sites values (7, 'http://espn.go.com/', 0, 0, null, "Sports");
insert into Sites values (8, 'http://www.tmz.com/', 0, 0, null, "Entertainment");
insert into Sites values (9, 'http://www.halowaypoint.com/halo4/en-us/', 0, 0, null, "Games");
insert into Sites values (10, 'http://www.apple.com/', 0, 0, null, "Electronics");

insert into Likes values (1, 3);
insert into Likes values (2, 3);
insert into Likes values (3, 2);

insert into Bookmarks values (1,1);
insert into Bookmarks values (3,1);
