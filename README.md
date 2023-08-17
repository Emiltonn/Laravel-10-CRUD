# Setup Projeto Laravel 10

### Passo a passo

Clone Repositório

```sh
git clone https://github.com/Emiltonn/Laravel-10-CRUD.git
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env

```dosini
APP_NAME="Laravel_10_Crud"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3320
DB_DATABASE=laravel_10
DB_USERNAME=root
DB_PASSWORD=root

```

Suba os containers do projeto

```sh
docker compose up -d
```

Acessar o container

```sh
docker compose exec app bash
```

Instalar as dependências do projeto

```sh
composer install
```

Gerar a key do projeto Laravel

```sh
php artisan key:generate
```

Gerar tabelas e popular banco de dados.

```sh
php artisan migrate --seed
```

Acessar o projeto
[http://localhost:8080](http://localhost:8080)

Table: Customer
ID (Primary Key)
CPF (Unique)
Name
Birth Date
Gender
Address ID (Foreign Key referencing the Address table)

Table: Address
ID (Primary Key)
Street
Street Number
Zip Code
City ID (Foreign Key referencing the City table)

Table: City
ID (Primary Key)
Name
Acronym
State ID (Foreign Key referencing the State table)

Table: State
ID (Primary Key)
Name
Acronym
