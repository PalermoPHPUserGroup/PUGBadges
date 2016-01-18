# User Group Badges

This is just a small Sunday afternoon project that tries to gamify participation in user group. The user will receive
a notification (for now an email) whenever that user receives a badge.

It is written in Laravel 5.0.

# Basic Concepts

Each user may belong to multiple groups and groups have multiple users. (many-to-many).
Each badge may belong to multiple groups and groups have multiple badges (many-to-many).
Each user may have multiple badges and badges belong to multiple users. (many-to-many).


# Installation

To install, run:
```sh
composer update
```
Perform migrations and seeding:

```sh
php artisan migrate
php artisan db:seed
```

* Rename .env.example to .env and configure mail and the database.

# Architecture

User is the group member model.
Group is the user group model.
Badge is the badge model.

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
/v1/users/1/badges/1 to assign a badge (assumes authenticated user)
Several badges are located in the public/badges directory.
