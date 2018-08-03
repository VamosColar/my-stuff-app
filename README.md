# my-stuff-app

## Acessar o container com as mesmas permissões que o usuário local

`docker exec -it -u $(id -u):$(id -g) my-stuff-php-fpm bash`

## Criando migration a partir de uma entidade

`php bin/console make:migration`

## Executar migrations

`php bin/console doctrine:migrations:migrate`

## Executar as Fixtures

`php bin/console doctrine:fixtures:load
`

Obs: Inserindo dados com valores fixos.

## Preparando ambiente para testes

Renomear o arquivo phpunit.xml.dist para phpunit.xml

