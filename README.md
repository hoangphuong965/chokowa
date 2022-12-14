# Local Environment

## CHOKOWA-DOCKER environment built using Laravel Sail and Docker. It consists of the following parts:

- Laravel (9.19)
- PHP (8.1)
- MySQL (8.0)

### Installation CHOKOWA
#### Clone project
```
git clone https://github.com/switch-git/chokowa.git
cd chokowa
cp .env.example .env
```

#### Install PHP dependencies
```bash
composer install
```
If errors happen when, please try this below command:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-req
```

#### Install docker environment
```
./vendor/bin/sail up -d
```

#### Change mail server 's config
Open .env file and input configs of your mail server. For example:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=example_mail@gmail.com
MAIL_PASSWORD=example_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="no-reply@chokowa.world"
MAIL_FROM_NAME="${APP_NAME}"
```

#### Create the symbolic link
```
docker exec chokowa-app-container php artisan storage:link
```

#### Migrate the database
```
docker exec chokowa-app-container php artisan migrate:fresh
```

#### Create seeders
```
docker exec chokowa-app-container php artisan db:seed
```

#### Generate key
```
docker exec chokowa-app-container php artisan key:generate
```

#### Run the project at local
- Admin service  
[http://localhost/admin](http://localhost/admin)  

- Station service  
[http://localhost/station](http://localhost/station)  

- Nurse service  
[http://localhost/nurse](http://localhost/nurse)  

Use below emails/passwords to log in:
```bash
# admin
admin@example.com / testpass1234

# station
station1@example.com / testpass1234
station2@example.com / testpass1234

# nurse
nurse1@example.com / testpass1234
nurse2@example.com / testpass1234
nurse3@example.com / testpass1234
```

#### If any errors happen when starting the app, please run below commands
- Regenerate list of classes
```
docker exec chokowa-app-container composer dumpautoload
```

- Clear cache
```
docker exec chokowa-app-container php artisan cache:clear

docker exec chokowa-app-container php artisan view:clear

docker exec chokowa-app-container php artisan config:cache

docker exec chokowa-app-container php artisan route:cache
```