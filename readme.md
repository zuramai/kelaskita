<h1 align="center">Selamat datang di KelasKita! 👋</h1>

![Landing Page](https://github.com/zuramai/kelaskita/blob/master/public/assets/images/screenshot.jpg?raw=true)



[![](https://img.shields.io/github/issues/zuramai/kelaskita?style=flat-square)](https://img.shields.io/github/issues/zuramai/kelaskita?style=flat-square) ![](https://img.shields.io/github/stars/zuramai/kelaskita?style=flat-square)
![](https://img.shields.io/github/forks/zuramai/kelaskita?style=flat-square) ![](https://img.shields.io/github/license/zuramai/kelaskita?style=flat-square) [![saythanks](https://img.shields.io/badge/say-thanks-ff69b4.svg?style=flat-square)](https://saythanks.io/to/zaidanline67%40gmail.com) [![HitCount](http://hits.dwyl.com/zuramai/https://github.com/zuramai/kelaskita.svg)](http://hits.dwyl.com/zuramai/https://github.com/zuramai/kelaskita)  [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com) [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg?style=flat-square)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity) [![made-for-VSCode](https://img.shields.io/badge/Made%20for-VSCode-1f425f.svg?style=flat-square)](https://code.visualstudio.com/) [![GitHub followers](https://img.shields.io/github/followers/zuramai.svg?style=flat-square&label=Follow&maxAge=2592000)](https://github.com/zuramai?tab=followers)

<p align="center">
	
<img align="center" src="http://ForTheBadge.com/images/badges/built-with-love.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/uses-html.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/makes-people-smile.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/built-by-developers.svg">

</p>

### 🤔 Apa itu KelasKita?
Web Management Kelas yang dibuat oleh <a href="https://github.com/zuramai"> Ahmad Saugi </a>. **KelasKita adalah Website untuk kelas agar para siswa dapat melihat jadwal pelajaran, jadwal piket, artikel, dan informasi lainnya melalui website dengan mudah.**

### 🤨 Fitur apa saja yang tersedia di KelasKita?
- Autentikasi Admin
- List Siswa & CRUD
- User & CRUD
- Jadwal piket & CRUD
- Jadwal Pelajaran & CRUD
- Settings (Dapat mengubah data website seperti judul, logo, favicon, dll)
- Artikel
- Dan lain-lain

### 📆 <a href="http://syauqi.js.org/">Release Date</a>
**Release date : 12 May 2020**
> KelasKita merupakan project open source yang dibuat oleh ahmad saugi. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

------------

 ### 👤 Default Account for testing
	
**Admin Default Account**
- Username: admin
- Password: admin

------------

## 💻 Install
1. **Clone Repository**
```bash
git clone https://github.com/zuramai/kelaskita.git
cd kelaskita
composer install
npm install
copy .env.example .env
```
2. **Buka ```.env``` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**
```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
3. **Instalasi website**
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan config:cache
```
4.** Jalankan website**
```bash
php artisan serve
```

## 🧑 Author

👤 <a href="https://www.facebook.com/ahmadsaugi.gis"> **Ahmad Saugi**</a>
- Facebook : <a href="https://www.facebook.com/ahmadsaugi.gis"> Ahmad Saugi</a>

## 🤝 Contributing
Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**


## 📝 License
- Copyright © 2020 Ahmad Saugi.
- **KelasKita is open-sourced software licensed under the MIT license.**

------------

- **Made with ❤️ by AhmadSaugi .**
- Copyright © 2020 Syauqi Zaidan Khairan Khalaf.
- KelasKita is open-sourced software licensed under the MIT license.

