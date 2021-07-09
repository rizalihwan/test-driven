<h1 align="center">Selamat datang di Aplikasi Perpustakaan👋</h1>

[](url)
!![Screenshot from 2021-07-09 16-30-23](https://user-images.githubusercontent.com/55536560/125057694-b8517700-e0d3-11eb-90c2-57a877503484.png)

------------

## 💻 Install

1. **Clone Repository**
```bash
git clone https://github.com/rizalihwan/perpustakaan.git
cd perpustakaan
composer install
npm install
copy .env.example .env
```

2. **Buka ```.env``` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai, karena di project ini menggunakan PostgreSQL jadi saya kasih contoh seperti berikut, dan jika kamu ingin menggunakan MySQL atau lainnya tinggal sesuaikan.**
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=perpus
DB_USERNAME=postgres
DB_PASSWORD=root
```

3. **Instalasi website**
```bash
php artisan key:generate
php artisan db:fresh (because i create new command for migrate tables & run the seeder)
php artisan storage:link
```

4. **Jalankan website**
```command
php artisan serve
```

## 🧑 Author

👤 <a href="https://www.facebook.com/izal.whanz/"> **Rizal Ihwan**</a>
- Facebook : <a href="https://www.facebook.com/izal.whanz/"> Rizal Ihwan</a>
- LinkedIn : <a href="https://www.linkedin.com/in/rizal-ihwan-98a8a9199/"> Rizal Ihwan</a>

## 🤝 Contributing
Sangat berterima kasih bagi yang ingin berkontribusi. **Karena Project ini saya selesaikan sendiri, tapi apabila anda ingin berkontribusi sangat dipersilahkan ya.**


## 📝 License
- Copyright © 2021 Rizal Ihwan.
- **Perpustakaan is open-sourced software licensed under the MIT license.**

------------

- **Feel free to ask me at [Telegram](https://t.me/ihw_me/).**

