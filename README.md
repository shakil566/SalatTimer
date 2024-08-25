# Salat Timer

## Project video link
https://drive.google.com/file/d/1JonqRk0AeGSvJxJpPvtLDEyp_dWe9Ero/view?usp=sharing

## Description
- This is task project
- Laravel version 10
- PHP 8.1

- In this project create a packege for salat time alert message with slack.
- Salat time crud added.
- Before 10 minutes from salat time, system notified user with slack.

## Installation
- For clone this project run this command: git clone https://github.com/shakil566/SalatTimer.git
- Create a database
- Then rename .env.example file to .env file and add database name
- SLACK_WEBHOOK_URL need to add in .env file

- Then run these command: 
- composer update
- npm install
- npm run dev
- php artisan key:generate
- php artisan migrate (with seed: php artisan migrate:fresh --seed) [Salat seeder added in this project]
- php artisan optimize:clear (optional)
- php artisan serve

- php artisan schedule:work

## Thank You