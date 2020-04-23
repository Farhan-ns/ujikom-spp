# Ujikom - Pembayaran SPP
## URL dan Akun
### Siswa
`localhost atau 127.0.0.1 atau sesuai VHOST` 
```
nisn = 1123456789
password = secret
```
### Admin
`localhost/admin atau 127.0.0.1/admin atau sesuai VHOST`
```
username = rachel.st
password = secret
```
## Instalasi:
- Instal dependency php dengan composer:
```
composer install
```
- Buat .env di cmd:
```
copy .env.example .env
```
- Buat database baru, buka file .env samakan value `DB_DATABASE` dengan nama database yang baru dibuat.
- generate app key:
```
php artisan key:generate
```
- Migrate database dan seed table nya:
```
php artisan migrate --seed
```
- Akses halaman login user Siswa atau Admin.

