# Mail Outreach
[![GitHub last commit](https://img.shields.io/github/last-commit/Joshuawilfred/mail-outreach)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Mail Outreach is a tool designed to automate the scheduling and sending of emails for events like special-days and holidays.

## Installation and usage
>Ensure your system meets the [Laravel 11 requirenments](https://laravel.com/docs/11.x/releases)

## Installation
### 1. Clone this Repository
```shell
git clone https://github.com/Joshuawilfred/mail-outreach.git
```
```shell
cd mail-outreach
```

### 2. Install Dependencies
```shell
composer install
npm install
```
### 3. Configure Environment
```shell
cp .env.example .env
```
Optional: Update the `.env` file with your environment variables.

### 4. Generate Application Key
```shell
php artisan key:generate
```

### 5. Database Setup
```shell
php artisan migrate --seed
```
This will create SQLite Database and feed it with dummy data

### 6. Start Application Server
```shell
npm run dev
```
Open new terminal and start server
```shell
php artisan serve 
```
Visit your Application server url e.g [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Testing

### 1. See pending emails
```shell
php artisan schedule:list
```
### 2. Sending emails
```shell
php artisan schedule:run
```
Alternatively you can send emails using the custom send emails command directly on your terminal
```shell
php artisan app:send-emails
```
![Demo](resources/images/screenshot.png)

After Sending emails, you can see them on `storage/logs/laravel.log` <br>
**Tip:** Configure Email Delivery Platform like [Mailtrap](https://mailtrap.io/) to your `MAILER` .env for better email testing

### 3. Automate sending emails
Create a cron job that will run the `schedule:run` command regularly to ensure that emails are always being sent automatically.

```shell
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```
Read more about **Task Scheduling** at [Laravel Docs](https://laravel.com/docs/11.x/scheduling#running-the-scheduler)

## Important Files & Folders
- `app/Console/Commands/SendEmails.php`
- `app/Console/Commands/ResetAnnualEmailStatuses.php`
- `app/Mail`
- `resources/views/emails`
- `routes/console.php`

## Running Commands
> ### Custom commands
>> - `php artisan app:send-emails`
>> - `php artisan app:reset-email-statuses`
> ##
> ### Scheduled commands
>> - `php artisan schedule:run`
>> - `php artisan schedule:list`
> ##

## License

This tool is licensed under the [MIT license](https://opensource.org/licenses/MIT). Contributions are welcomed!
