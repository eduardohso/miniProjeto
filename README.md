# MiniProjeto

Este projeto foi desenvolvido na disciplina de **Laboratório de Programação** da **Universidade Federal de Viçosa - Campus Rio Paranaíba (UFV-CRP)**. O sistema consiste em um cadastro e gerenciamento de eventos, utilizando **PHP** e **MySQL**, com o ambiente de desenvolvimento configurado no **XAMPP**.

## Arquivos Principais

- **index.php**: Página principal.
- **cadastro.php**: Cadastro de eventos.
- **eventos.php**: Lista de eventos.
- **eventoDescricao.php**: Descrição de eventos.
- **connect.inc.php**: Configuração de conexão com o banco de dados.
- **db.sql**: Script para criar a base de dados.
- **style.css**: Estilos da página.

## Requisitos

- XAMPP (PHP 7.0+ e MySQL 5.7+)
- Servidor web (Apache ou similar)

## Instalação

1. Importe `db.sql` no MySQL utilizando o phpMyAdmin do XAMPP.
2. Configure `connect.inc.php` com os dados do seu banco de dados MySQL.
3. Coloque os arquivos na pasta `htdocs` do XAMPP.
4. Inicie o servidor Apache e MySQL no painel de controle do XAMPP.
5. Acesse `index.php` no navegador através do endereço `http://localhost/nome_do_projeto`.

