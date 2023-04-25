# README.md Generation

Sistema pra geração de Arquivos README.md para uso no github.

Objetivo de automatizar e organizar a criação desses arquivos.

- Atualmente ele gera o texto na página html.

## DOCKER

```bash
docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache
```