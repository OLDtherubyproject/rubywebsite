# RubyWebsite
**_[Laradminator](https://github.com/kossa/laradminator/)_**  edited to work with **_[RubyServer](https://github.com/rubyserver/rubyserver/)_**


## Setup:
#### Linux
All you need is to run these commands:
```bash
git clone https://github.com/rubyserver/rubywebsite.git
cd rubywebsite 
composer install                   # Install backend dependencies
sudo chmod 777 storage/ -R         # Chmod Storage
cp .env.example .env               # Update database credentials configuration
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:fresh --seed # Run migration and seed users and categories for testing
yarn install                       # or npm i to Install node dependencies
npm run production 
```
#### Windows
You'll need [Node.JS](https://nodejs.org/) and set _public_ folder as webroot
```bash
composer install                   # Install backend dependencies
cp .env.example .env               # Update database credentials configuration
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:fresh --seed   # Run migration and seed users and categories for testing
npm i                              # or yarn install to Install node dependencies
npm run dev                 # To compile assets for prod
```
> All the data are reset each 30mn ;) 
> **please d'ont forget to remove [this](https://github.com/rubyserver/rubywebsite/blob/master/app/Console/Kernel.php#L27-L28) function in your app** 

***

## Included Packages:
#### Laravel (php):

* [Laravel Framework](https://github.com/laravel/laravel/) (5.6.*)
* [Forms & HTML](https://github.com/laravelcollective/html) : for forms
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) : for debugging
* [Intervention Image](https://github.com/intervention/image) : image handling and manipulation


#### Create new CRUD
Creating CRUD in your application is the job you do most. Let's create Post CRUD:

* Add new migration and model : `php artisan make:model Post -m`
* Open migration file and add your columns
* Create PostsController : `php  artisan make:controller PostController`. fill your resource (you can use UserController with some changes) or, if you are a lazy developer like me, use a [snippet](https://github.com/kossa/st-snippets/blob/master/kossa_php/Laravel/lcontroller.sublime-snippet) and make only 2 changes
* Duplicate `resource/views/admin/users` folder to `posts`, make changes in `index.php`, `create.blade.php`, `edit.blade.php`

#### Move Image and file ?
To move images im using a [helper](https://github.com/rubyserver/rubywebsite/blob/master/app/Http/helpers.php#L4) function based on [intervention/image](https://github.com/intervention/image) and [variables.php](https://github.com/rubyserver/rubywebsite/blob/master/config/variables.php#L20) 
you can check full example in [User.php](https://github.com/rubyserver/rubywebsite/blob/master/app/User.php#L70)



#### Do you have question ?
Not hesitate, [open](https://github.com/rubyserver/rubywebsite/issues/new) new issue ;)
