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

Что я дополнительно сделал

1) Внёс изменения в файле config/app.php смотрите строки 168 & 232
2) Опубликовал файл конфигурации из пакета с помощью команды 
```bash 
php artisan vendor:publish --provider="ProtoneMedia\LaravelFFMpeg\Support\ServiceProvider"
```

## Использование

В папке public есть файл для тестирования обработки файла.
Как результат будет видео обрезано в ширине и высоте.

Другие примеры использования можно найти в оф.репозитории
https://github.com/protonemedia/laravel-ffmpeg/tree/7.x#usage
