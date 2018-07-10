### API Laravel Veiculos ###

Projeto desenvolvido em PHP com utilização de framework [Laravel](https://laravel.com/docs).

Esta api tem o objetivo unico de executar as funções basicas para manipulação de dados (Veiculos) - GET, POST, PUT e DELETE.

Para utilizar ou efetuar teste é importante ter os seguintes items em sua maquina:

* PHP >= 7.0
* Mysql
* Composer (https://getcomposer.org/)

Recomendo instalar algum pacote como [Xampp](https://www.apachefriends.org/pt_br/index.html) ou [WampServer](http://www.wampserver.com/) pois já tem mysql e php.

Após a instalação do requisitos anteriores, execute seu mysql, abra em alguma ide ou no proprio navegado o PHPMyAdmin e no espaço para Sql query execute:

### Criação do banco de dados ###

    DROP DATABASE IF EXISTS `db_veiculos`;
    CREATE DATABASE IF NOT EXISTS `db_veiculos`;

### Instalação pacotes Laravel ###

Para instalação dos pacotes do framework Laravel, abra um terminal na pasta do projeto e execute: 

    composer install

Crie o arquivo .env com as configurações do banco: 

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 
    DB_PORT= 
    DB_DATABASE=db_veiculos 
    DB_USERNAME=root 
    DB_PASSWORD=

Para criação das tabelas, abra um terminal na pasta do projeto e execute: 

    php artisan migrate

### Alternativa ao Migrate ###
Como alternativa ao migrate anexei um script da criação ao banco de dados, procure no fonte do projeto.

    db_veiculos.sql


### Popular dados fake no banco de dados ###

Para popular alguns dados fakes no banco, execute: 

    php artisan db:seed

### Obs: ###

Não esqueça de criar seu arquivo .env com as configurações do seu banco de dados local:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 
    DB_PORT= 
    DB_DATABASE=db_veiculos 
    DB_USERNAME=root 
    DB_PASSWORD=

### Projeto FrontEnd ###
Estou desenvolvendo um projeto em Angular para manipular essa API, veja o repositorio aqui: [Projeto View Veiculos](https://github.com/rogeriosfa/veiculos_angular_view)
