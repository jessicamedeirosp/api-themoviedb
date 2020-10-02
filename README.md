## Sobre o Projeto

A api “api-themoviedb” foi desenvolvido com a linguagem de programação PHP, utilizando o framework Laravel 7 e conceitos de API Rest. A aplicação consiste em uma API que possibilita consultar os filmes e genêros de outra api (https://developers.themoviedb.org/3).

# Endpoint

- Endpoint que obtém uma lista dos próximos filmes, utilizando páginação (20 por página).
- Endpoint que obtém uma lista dos filmes mais bem avaliados, utilizando páginação (20 por página).
- Endpoint que obtém filme específico e todos os vídeos relacionados a ele.
- Endpoint que obtém uma lista de gêneros ou único gênero por id.

# Links para acessar os dados

- /api/movie/upcoming
- /api/movie/top-rated
- /api/movie/550
- /api/genre/movie/list
- /api/genre/18

## Requisitos

Para que seja possível executar o software em uma máquina é necessário que os seguintes pacotes estejam instalados e configurados:

- Apache
- PHP^7
- Git
- Composer

## Passos para a instalação

1. Execute o comando a seguir para clonar o projeto

```
git clone https://github.com/jessicamedeirosp/api-themoviedb.git
```

2. Execute os seguintes comandos na raiz do projeto para baixar as dependencias do projeto

```
php composer.phar install
```

ou 

```
php composer install
```

3. Configurar token:
- Você precisará acessar o site do themoviedb e criar uma conta para gerar o token. 
- É necessário utilizar token na v4. 
- Adicione na ultima linha do arquivo .env

```
TMDB_TOKEN=COLE_SEU_TOKEN_AQUI
```

4. Abra a linha de comando no diretório raiz da aplicação e execute o seguinte comando:

```
php artisan serve
```

OBS: Para verificar os dados você pode utilizar o Browser ou o Postman.


