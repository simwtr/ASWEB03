# Asweb3
Лабораторная работа №3
Запуск сайта в контейнере
Цель: Ознакомление с запуском сайтов в контейнере. Создание кластеров контейнеров и установка сайтов на базе Wordpress.

Ход выполнения лабораторной работы.
**Шаг 1**
  Проверка наличия Docker
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/d7d741c6-2960-4b43-ab86-59b0cdb652db)

**Шаг 2**
  Создание папки asweb3, в созданной папке asweb3 создать папки: database, files, site.
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/251c8e31-35dc-45bb-97b8-a10a0d64df95)
  
**Шаг 3**
  Скачать Wordpress с официального сайта и распаковать в папку site.
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/ae0723df-a1e4-4eec-bb71-5f245daa7d4c)
  
**Шаг 4**
  Создание конфигурационного файла для Apache HTTP Server.(docker run -d --name httpd httpd:2.4)

  Скопировать конфигурационный файл из контейнера в папку(docker cp httpd:/usr/local/apache2/conf/httpd.conf .\files\httpd\httpd.conf)

  Остановить контейнер httpd

  Удалить httpd контейнер

  В созданном файле в папке \files\httpd\httpd.conf необходимо расскоментипровать строки 
    1. mod_proxy.so
    2. mod_proxy_http.so
    3. mod_proxy_fcgi.so
    
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/9547ffb7-f273-4de3-b6e9-2d6511bc4ab3)
  
  Затем в этом же файле найти ServerName параметр и добавить строки:
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/de2c4084-fc73-48b0-828e-fc87c112f79a)
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/fad70aa0-a893-47ec-998f-ac9c918e4025)
  
  Изменить значение параметра DocumentRoot
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/114086c2-1ee3-4555-8b90-44edae6b9ba0)
  
**Шаг 5**
  Создать файл Dockerfile.httpd
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/d930a046-4ce6-43f7-a28c-9a8866fb6dfc)
  
 **Шаг 6**
  Создать файл Dockerfile.php-fpm
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/5214b6fd-69f7-41a0-9fac-939563e7c3e6)
  
**Шаг 7**
  Создать файл Dockerfile.mariadb
  
  ![image](https://github.com/simwtr/ASWEB03/assets/103261387/29d9b0fa-e2c1-4b91-b6a2-ba92f10a59c4)
  
**Шаг 8**
 Сборка решения. 
 Создать файл docker-compose.yml
 
 ![image](https://github.com/simwtr/ASWEB03/assets/103261387/3740b2fa-f082-4767-b860-6374a7f7245f)
 
**Шаг 9**
  Запуск и тестирование
  Перейти в папку asweb3 и запустить сборку образов сервисов.(docker-compose build)

  Запуск контейнеров(docker-compose up -d)

  Открыть в браузере страницу wordpress.localhost

  Произвести установку сайта

  Остановка контейнеров(docker-compose down)

  Удалить контейнеры(docker-compose rm)

  Проверка открывается ли сайт. Сайт не должен запуститься
  
  Снова запустить кластер контейнеров(docker-compose up -d)

  Проверка работоспособности сайта.

**Вопросы:**
1. Сколько секунд собирался проект?
   **Проект собирался 252.2 сек**
2. Как скопировать файл из контейнера в хостовый компьютер?
   **docker cp <имя_контейнера>:<путь_в_контейнере> <путь_на_хосте>**
3. За что отвечает директива DocumentRoot в конфигурационном файле Apache HTTP Server?
   **Директива DocumentRoot в конфигурационном файле сервера Apache HTTP Server указывает корневую директорию для веб-сайта, она определяет путь к каталогу, в котором находятся файлы,
   доступные посетителям веб-сайта через HTTP.**
4. В файле docker-compose.yml папка database хоста монтируется в папку /var/lib/mysql контейнера mariadb. Для чего монтируют к контейнеру базы данных папку?
   **Монтирование папки хоста в контейнер позволяет сохранять данные вне контейнера, таким образом, данные сохраняются и могут быть использованы при следующем запуске контейнера.**
