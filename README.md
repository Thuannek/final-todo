## Tech

Technologies used in this project:

* [Laravel](https://github.com/laravel/laravel) - The Laravel PHP framework.
* [Livewire](https://github.com/livewire/livewire) - Laravel Livewire.
* [Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) - Tailwind.

## Database Structure

<p align="center">
  <img src="/img6.png">
</p>

## List features of projects and screenshots

#### Task Creation

##### Login and Register:
<p align="center">
  <img src="/img7.png">
  
</p>
<p align="center">
  <img src="/img8.png">
  
</p>

##### Users can add tasks:
<p align="center">
  <img src="/img1.png">
</p>

##### Edit:
<p align="center">
  <img src="/img2.png">
</p>
<p align="center">
  <img src="/img3.png">
</p>


##### Delete:
<p align="center">
  <img src="/img4.png">
</p>

## How to run the application
Install the dependencies and devDependencies:

```sh
$ cd Final-Todo-App
$ composer install
```

Create your .env file and generate the application key:

```sh
$ cp .env.example .env
$ php artisan key:generate
```

Run migrations and start the server:

```sh
$ php artisan migrate
$ php artisan serve
```