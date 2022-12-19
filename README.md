# App - Gestão de Estoque

Objtivo do projeto é aprofundar todos o contéudo aprendido no Curso de Laravel com professor Jorge Santa Ana pela plataforma da Udemy.

## Pré-requisitos para utilização da aplicação em seu sistema local:
- Composer - [Link para instalação](https://getcomposer.org/download/)
- Laravel - [Link para instalação](https://laravel.com/docs/7.x)
- Servidor Localhost podendo ser o [WampServe](https://www.wampserver.com/en/) ou [Xampp](https://www.apachefriends.org/pt_br/index.html)

## Preparação de Ambiente
Após a instalação bem sucedida dos pré-requisitos listados acima, podemos seguir com a preparação do nosso ambiente conforme os passos listados logo abaixo:

## Clone do Projeto
Dentro do servidor localhost instalado, faça o clone do projeto no GitHub - https://github.com/Igoor-goomes/app_gestao.git

## Configuração do Banco de Dados
Por padrão quando se clona um projeto do GitHub, o arquivo *.env* é apenas um arquivo exemplo, com isso precisamos enviar alguns comandos via terminal para nosso diretorio, ao abrir o terminal navega a até a pasta do projeto, chegando nela execute os comandos abaixo:
- **cp .env.example .env**
- **php artisan key:generate**

Após executar esses comandos acima, vamos abrir nosso projeto no editor de texto/IDE de sua prefêrencia e dentro do arquivo *.env* vamos precisar subistituir as seguintes linhas:

- Por padrão os campos **DB_CONNECTION=mysql** | **DB_HOST=127.0.0.1** | **DB_PORT=3306** | **DB_USERNAME=root** já estaram configurados desta forma, caso não favor seguir com a substituição para conectarmos ao banco de dados.
- Substituir **DB_DATABASE=laravel** para **DB_DATABASE=gestao-estoque** 

O campo **DB_PASSWORD** deve ser preenchido com sua senha do MySQL.

## Preparando as Migrations
Logo que terminarmos a configuração do banco vamos precisar executar o comand dentro do terminal do próprio VS Code:

- **php artisan migrate:fresh**

## Criando seu Login de Acesso
Logo que executar o comando **php artisan serve** você irar iniciar o serviço laravel, com isso ao acessar a página principal no formulário de registro deve-se registrar Nome, E-mail e Senha para conseguir ter acesso a plataforma.

## Observações
Caso tenha clonado o projeto para dentro de servidor localhost lembre-se de validar se o serviço está ativo em sua máquina.
Em caso de duvidas favor entrar em contato via [E-mail](igorgomesdebrito.dev@gmail.com) ou via Linkedin [Linkedin](https://www.linkedin.com/in/igor-gomes-de-brito/).

## Considerações Finais
O projeto foi desenvolvido visando questões de aprendizado, estou aberto a criticas construtivas e dicas referente ao que posso melhorar no projeto e também para minha carreira profissional, o projeto é simples mais com foco no conhecimento adiquirido através de cursos.