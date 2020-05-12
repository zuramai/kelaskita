![Landing Page](https://github.com/zuramai/kelaskita/blob/master/public/assets/images/screenshot.jpg?raw=true)

Kelaskita adalah website untuk kelas agar para siswa dapat melihat jadwal pelajaran, jadwal piket, artikel, dan informasi lainnya melalui website.

# Fitur-fitur yang tersedia
- Autentikasi Admin
- List Siswa & CRUD
- User & CRUD
- Jadwal piket & CRUD
- Jadwal Pelajaran & CRUD
- Settings (Dapat mengubah data website seperti judul, logo, favicon, dll)
- Artikel
- Dan lain-lain

# Instalasi
1. Clone Repository
```bash
git clone https://github.com/zuramai/kelaskita.git
cd kelaskita
composer install
npm install
copy .env.example .env
```
2. Buka ```.env``` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai
```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
3. Instalasi website
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan config:cache
```
4. Jalankan website
```bash
php artisan serve
```

## Default Account
- Username: admin
- Password: admin

## Contributing

Contributions, issues and feature requests di persilahkan. Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!

## License
- Copyright © 2020 Ahmad Saugi.
- is open-sourced software licensed under the MIT license.

