<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## Cara Cloning Laravel dari GitHub

-   Ketikkan `git clone https://github.com/acimkompor/Delphi-API-Laravel-10.git`
-   Masuk ke folder Delphi-API-Laravel-10 ketikkan `cd Delphi-API-Laravel-10`
-   Kemudian ketikkan `composer update` agar laravel melengkapi file vendor yang tidak masuk di GitHub
-   setelah itu copy kan file `.env.example` dan ubah namanya menjadi `.env`
-   Kemudian ketikkan lagi `php artisan key:generate` agar dibuatkan otomatis APP_KEY di file `.env`
-   Atur konfigurasi di file `.env` sesuai dengan koneksi ke database kalian.
-   Buat database di PHPMyAdmin sesuai dengan konfigurasi di file `.env` nya
-   Lanjut `php artisan migrate --seed`
-   Cek database kalian apakah sudah dibuatkan beberapa tabel sesuai dengan project yang akan kita buat

Aplikasi laravel sudah bisa digunakan

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
