# Sistema de Cadastro de Colaboradores

## Sobre o projeto

O sistema foi desenvolvido para realizar o cadastro de novos colaboradores das **Lojas Brincos e Companhia**.

O usuário preenche um formulário com seus dados e, após o envio, o sistema recebe as informações utilizando o método **POST**, armazena os dados em variáveis PHP e apresenta uma página de confirmação.

Além disso, o sistema verifica se o candidato possui **18 anos ou mais**, utilizando uma variável booleana.

## Informações cadastradas

O formulário possui os seguintes campos:

* Nome completo
* Idade
* Profissão
* Salário pretendido
* Experiência anterior

## Tecnologias utilizadas

* HTML5
* CSS3
* PHP
* XAMPP para execução do servidor local

## Arquivos do projeto

### `cadastro.html`

Contém o formulário utilizado para coletar as informações do candidato.

### `processadorcadastro.php`

Recebe os dados enviados pelo formulário utilizando `$_POST`, armazena cada informação em uma variável e apresenta os dados no navegador.

Também realiza a verificação da idade mínima para a vaga.

### `estilização.css`

Responsável pela aparência visual do formulário e da página de processamento.

## Funcionamento

O usuário acessa o formulário, preenche os dados e clica no botão de cadastro.

Os dados são enviados para o arquivo PHP através do método `POST`.

O PHP processa as informações e exibe:

* Os dados cadastrados;
* Uma mensagem personalizada utilizando nome, profissão e experiência;
* A situação do candidato em relação à idade mínima;
* Um botão para retornar ao formulário.

## Execução

Para executar o projeto localmente, é necessário utilizar um servidor com suporte a PHP, como o XAMPP.

Os arquivos devem ser colocados dentro da pasta `htdocs` do XAMPP.

Exemplo:

```text
C:\xampp\htdocs\cadastro_colaboradores\
```

Com o Apache iniciado, o projeto pode ser acessado pelo navegador através de:

```text
http://localhost/cadastro_colaboradores/cadastro.html
```
