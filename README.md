# User Group Badges

This is just a small Saturday afternoon project that tries to gamify participation in user group.

It is written in Laravel 5.

Installation instructions:
To install, run:
```sh
composer update
```
Perform migrations and seeding:

```sh
php artisan migrate
php artisan db:seed
```

The basic structure is simple:
User is the group member model.
Group is the user group model.
Badge is the badge model.

Each user may belong to multiple groups and groups have multiple users. (many-to-many).
Each badge may belong to multiple groups and groups have multiple badges (many-to-many).
Each user may have multiple badges and badges belong to multiple users. (many-to-many).

The tables are:
users
groups
badges
badge_user
badge_group
group_user

Basic api calls be be:
/v1/user to return all users and their badges
/v1/users/1 to return a user and badges
/v1/badges to return all badges
/v1/badges/1 to return a badges
