<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## NofalSeo Task
### Task Description 
create Laravel blog project  with auth, module Posts  with comments

custom route: dashboard

Posts [ id, title, author, content,image, date , soft delete ]  
comments [id, post_id, user_id, comment, date, soft delete]

laravel bootstrap auth ui
Post validation => title unique , image with image type [ png, jpg, webp ]
and max size for upload 2M, content Minimum number of letters 20
Comment Validation => user_id,post_id, comment Minimum


image =>  return path with name from model    *example  appends  name (image_for_web)
date  => custom format return from model     *example appends  date (date_for_web )
helper function for uploading image 

Post insert and update with validation
Post with soft delete
delete comment with post
404 custom page
### How To Run

- Download this code


- Install composer

```bash 
composer install
 ```

- Install npm

```bash 
npn install & npm run dev
 ```

- Edit .env file


- Run migration

```bash 
php artisan migrate
 ```

- Run The App

```bash 
php artisan serve
 ```
