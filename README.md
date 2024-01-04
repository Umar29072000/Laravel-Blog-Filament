# Laravel 10 Blog Filament
# Umar Khoirul Afif

Daftar Isi 
- [Kebutuhan](#kebutuhan)   
- [Langkah Menjalankan](#menjalankan)
- [Kontribusi](#kontribusi)

## Development

### Kebutuhan

Beberapa hal yang diperlukan untuk menjalankan project ini di lokal teman-teman:

-   PHP
-   MySQL
-   Composer
-   Node.JS


### Menjalankan

Silakan **fork** dulu project ini di **REPOSITORY yang teman-teman punya** 
Clone project dari repo yang teman-teman punya

```
git clone https://github.com/{username github teman-teman}/Laravel-Blog-Filament.git

cd Laravel-Blog-Filament
```

Jalan terminal dengan perintah:

```
composer install
```

```
npm install
```

```
npm run dev
```

Lanjut copy file <code>.env.example</code> dengan nama <code>.env</code>. Kemudian edit beberapa di file berikut ini dengan menambahkan **8000** pada **APP_URL**:

Terkait database:

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=xxx
APP_DEBUG=xxx
APP_URL=http://localhost:8000
```

Lanjut lakukan proses migrate melalui terminal

```
php artisan migrate:fresh --seed
```

Lanjut, generate key

```
php artisan key:generate
```

Lalu jalankan perintah

```
php artisan storage:link
```

Jalankan project dengan perintah

```
php artisan serve
```

Silakan dibuka di <code>http://127.0.0.1:8000</code>


### Kontribusi

1. Lakukan langkah development di bagian atas
2. Buat branch <code>dev</code> di project lokal teman-teman

```
git branch dev
```

3. Lakukan perubahan
4. Kirim perubahan ke dalam fork yang teman-teman miliki

```
git push origin dev
```

5. Lakukan <code>compare dan pull request</code> di github teman-teman
