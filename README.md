# Burgerschap Portfolio

Made by:

- Finn Groenewoud

## Installation

1. Clone the repository

```bash
git clone git@github.com:Finn-Burgerschap/portfolio-website.git
```

2. Install the dependencies

```bash
composer install
npm install
```

3. Create a .env file and configure it to your liking

```bash
cp .env.example .env
```

4. Generate a new application key

```bash
php artisan key:generate
```

5. Run the migrations

```bash
php artisan migrate --seed
```

6. Build the assets

```bash
npm run build
```

7. Run the server

```bash
php artisan serve
```

## Usage

Access the website by going to [http://localhost:8000](http://localhost:8000)
