## Tech

Technologies used in this project:

* [Laravel](https://github.com/laravel/laravel) - The Laravel PHP framework.
* [Livewire](https://github.com/livewire/livewire) - Laravel Livewire.
* [Tailwind CSS](https://github.com/tailwindlabs/tailwindcss) - Tailwind.
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