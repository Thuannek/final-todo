## Tech

Technologies used in this project:

* [Laravel](https://github.com/laravel/laravel) - The Laravel PHP framework.
* [Livewire](https://github.com/livewire/livewire) - Laravel Livewire.
* [Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) - Tailwind.
<p align="center">
  <img src="blob:https://www.facebook.com/a0fe8165-ad80-4c6f-a7fd-dd03c99a149d">
</p>
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