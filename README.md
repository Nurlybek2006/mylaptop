# MyLaptop

MyLaptop - ноутбуктерді және компьютерлік техниканы сатуға арналған веб-жоба. Қосымша Laravel негізінде жасалған және өнімдер каталогын, санаттарды, тапсырыстарды, себетті және маркетплейс мүмкіндіктерін дамытуға арналған.

## Технологиялар

- PHP 8.2 немесе одан жоғары
- Laravel 12
- MySQL
- Vite
- Tailwind CSS
- Alpine.js
- Laravel Breeze және Blade

## Жоба мүмкіндіктері

Дерекқор құрылымында келесі негізгі бөлімдер қарастырылған:

- пайдаланушыны тіркеу, жүйеге кіру және профильді басқару;
- ноутбук санаттары мен өнімдері;
- себет және тапсырыстар;
- тапсырыс құрамындағы өнімдер;
- маркетплейс өнімдері мен қызығушылық білдіру сұраулары;
- сатушы мен сатып алушы арасындағы хабарламалар;
- байланыс формасы және email растау.

Жобаның кейбір бөлімдері әзірлену үстінде болуы мүмкін. Қолжетімді маршруттарды көру үшін `php artisan route:list` командасын орындаңыз.

## Орнату

### Қажетті бағдарламалар

Компьютерде мына құралдар орнатылған болуы керек:

- PHP 8.2+
- Composer
- Node.js және npm
- MySQL немесе XAMPP

### Орнату қадамдары

1. Репозиторийді жүктеп, жоба бумасына өтіңіз:

   ```bash
   cd c:\xampp\htdocs\mylaptop
   ```

2. PHP тәуелділіктерін орнатыңыз:

   ```bash
   composer install
   ```

3. JavaScript тәуелділіктерін орнатыңыз:

   ```bash
   npm install
   ```

4. `.env` файлын жасаңыз:

   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

5. MySQL ішінде `laravel` атты дерекқор жасаңыз немесе `.env` файлына өз дерекқорыңыздың параметрлерін енгізіңіз:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Миграцияларды орындаңыз:

   ```bash
   php artisan migrate
   ```

## Жобаны іске қосу

Laravel серверін іске қосу:

```bash
php artisan serve
```

Frontend үшін бөлек терминалда Vite әзірлеу серверін іске қосыңыз:

```bash
npm run dev
```

Содан кейін браузерден [http://localhost:8000](http://localhost:8000) мекенжайын ашыңыз.

Екі процесті бір командамен іске қосу үшін:

```bash
composer run dev
```

## Өндірістік жинақ

Frontend файлдарын жинау:

```bash
npm run build
```

Өндіріске шығар алдында кэштерді тазалап, конфигурацияны кэштеуге болады:

```bash
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Тестілеу

Барлық тесттерді іске қосу:

```bash
php artisan test
```

немесе:

```bash
composer test
```

## Жоба құрылымы

```text
app/                 Қосымшаның негізгі PHP коды
database/migrations/ Дерекқор кестелерінің миграциялары
database/seeders/    Бастапқы деректерді толтыру
resources/css/       CSS және Tailwind файлдары
resources/js/        JavaScript файлдары
resources/views/     Blade шаблондары
routes/              Веб және аутентификация маршруттары
public/              Қоғамдық файлдар және жинақталған ресурстар
tests/               Feature және Unit тесттері
```

## Лицензия

Жоба MIT лицензиясы бойынша таратылады.
