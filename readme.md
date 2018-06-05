# RubyWebsite
_[Laradminator](https://github.com/kossa/laradminator)_  as admin bash, and Bootstrapious' _[Universal Template](https://bootstrapious.com/p/universal-business-e-commerce-template)_ as main layout  
Website used for manage infos and accounts of _[RubyServer](https://github.com/rubyserver/rubyserver)_

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
php artisan migrate:fresh --seed   # Run migration and seed users and categories for testing
yarn install                       # or 'npm i' to Install node dependencies
npm run production 
```

#### Windows
You'll need [Node.JS](https://nodejs.org) or [Yarn](https://yarnpkg.com) and set _public_ folder as webroot
```bash
composer install                   # Install backend dependencies
cp .env.example .env               # Update database credentials configuration
php artisan key:generate           # Generate new keys for Laravel
php artisan migrate:fresh --seed   # Run migration and seed users and categories for testing
npm i                              # or 'yarn install' to Install node dependencies
npm run prod                       # You can use 'npm run dev' too, the result will be the same
```

***

## Included Packages:

* [Laravel Framework](https://github.com/laravel/laravel/) (5.6.x)
* [Forms & HTML](https://github.com/laravelcollective/html): for forms
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar): for debugging
* [Intervention Image](https://github.com/intervention/image): image handling and manipulation
* [Laravel Filemanager](https://github.com/UniSharp/laravel-filemanager): media gallery
* [CKEditor 4](https://ckeditor.com/ckeditor-4): for text editing


#### Do you have question ?
Not hesitate, [open](https://github.com/rubyserver/rubywebsite/issues/new) new issue ;)
