## TEST SPRINT 2

Sebelum running project ini, langkah-langkah yang harus dilakukan:
- setelah melakukan git clone/ download project ini, running `composer install`
- buat file bernama `.env`
- copy isi file `.env.example` ke dalam `.env`
- isi hal-hal penting di dalam `.env` seperti `DB_DATABASE`,`DB_USERNAME`,`DB_PASSWORD`
- isi juga hal penting lainnya seperti `APP_URL_CITY` untuk api rajaongkir city, `APP_URL_PROVINSI` 
untuk api raja ongkir provinsi dan `APP_KEY_RAJAONGKIR` untuk api key rajaongkir
 - lakukan command `php artisan migrate` untuk migrasi database
 - running project ini dengan ketik `php -S localhost:{port} -t public` contoh: `php -S localhost:1234 -t public`
 - akses url `/register` untuk mendaftar terlebih dahulu dengan format: body {username,email,password}
 - setelah register berhasil anda akan mendapatkan `api_key` untuk loginnya bisa akese ke url `/login` dengan format
 body {email,password} dan headers `Authorization` dengan value `bearer {api_key}`
 - setelah login, isi table provinsi dan table city dengan data dummy dengan cara mengakses
 url `/province-baru` untuk provinsi dan `/city-baru` untuk city serta jangan lupa untuk menyertakan `Authorization api_key`
  untuk dapat akses url ini
 -  untuk sumber data pencarian provinces & cities dapat mengakses url `/list-province` untuk provinsi dan url `/list-city`
 untuk cities
 