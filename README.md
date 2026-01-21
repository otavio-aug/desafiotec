## Tecnologias Utilizadas

- PHP 8.5.2
- Laravel
- MySQL
- Node.js + NPM
- TailwindCSS
- Vite

---

## Requisitos

Antes de começar, precisamos instalar:

- PHP
- Composer
- Node.js
- NPM
- MySQL

No meu caso, utilizei Xampp para facilitar o processo de instalação do MySQL no windows.

---

## Instalação do Projeto

Após clonar o projeto, vá até o diretório em que ele está localizado, e utilize os seguintes comandos respectivamente (windows):

`composer install`
`npm install`
`copy .env.example .env`
`php artisan key:generate`

Agora, vamos realizar algumas verificações, abra o arquivo ".env", e procure por "DB_CONNECTION", aqui, encontraremos um bloco onde você deverá mudar os dados.

`DB_HOST=Caso a conexão seja local, 127.0.0.1, caso não, informar o endereço`

`DB_PORT=Porta do mysql (3306 padrão)`

`DB_DATABASE=Nome do banco utilizado (crie um)`

`DB_USERNAME=Username para conexão ao banco (padrão root)`

`DB_PASSWORD=Senha para conexão ao banco (padrão do xampp vazia)`

Após, voltaremos ao terminal e utilizaremos:

`php artisan migrate`

Estamos prontos, abra um novo terminal e execute `npm run dev`, abra mais um, e execute `php artisan serve
`.

Se tudo ocorrer bem, você verá Server running on http://127.0.0.1:8000.

Agora basta acessar a URL e desbravar o site!