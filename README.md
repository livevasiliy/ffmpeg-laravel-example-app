# Установка

#### Для начала установите пакет в своей системе или в образе docker для работы с видеофайлами

### Linux
```bash
sudo apt install ffmpeg
```

### Windows / Mac
Следуйте инструкциям на оф.сайте https://ffmpeg.org/download.html

Установка всех пакетов 
```bash
composer install
```

Создайте ссылку для папки public со storage
```bash
php artisan storage:link
```


## Использование

В папке public есть файл для тестирования обработки файла.
Как результат будет видео обрезано в ширине и высоте.

Другие примеры использования можно найти в оф.репозитории
https://github.com/protonemedia/laravel-ffmpeg/tree/7.x#usage
