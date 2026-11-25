# Lab 5: Docker Compose та LEMP-стек

Лабораторна робота №5 з дисципліни «Розгортання інформаційно-комунікаційних систем» (група ІК-41).

## Структура репозиторію
- `docker_compose_lab/` — простий приклад з двох контейнерів (`nginx:latest` та `php:8.2-fpm`, `phpinfo()` на `http://localhost:8080`).
- `lemp_compose/` — повний LEMP-стек (`nginx`, кастомний образ `php` з `mysqli` та `pdo_mysql`, `mysql:8` з томом `db_data`) та додатковий сервіс `phpmyadmin` на порту `8081`.

## Запуск повного LEMP-стеку
```bash
cd lemp_compose
docker compose up -d --build
docker compose ps

- Веб-застосунок: http://localhost:8080

- phpMyAdmin: http://localhost:8081 (користувач: webuser, пароль: webpass, база: webdb)
