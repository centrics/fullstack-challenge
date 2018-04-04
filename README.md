# Desafio Fullstack: Laravel + VueJS

> Então vc quer ser um dev fullstack na Centrics, certo?

Este desafio consiste em desenvolver uma aplicação que simula um site de anúncios para compra e venda (vc falou OLX?).

Testaremos as suas habilidades de desenvolvedor além de outros aspectos como: qualidade do código, capacidade de abstração, fidelidade na reprodução do layout e boa documentação. 

A stack utilizada no desafio **deve ser** PHP (Laravel) no backend e VueJS no frontend;

E aí, tá afim?

---

### Instruções
- Faça um **Fork** deste repositório;
- Crie uma branch com o seu nome, no estilo `nome-sobrenome`;
- No seu projeto, crie um diretório chamado `project`. Todos os arquivos que você criar devem estar dentro desta pasta;
- A arquitetura da sua aplicação deve ser separada em **backend** e **frontend**, sendo o backend uma API Restful e o front o consumidor dessa API e layout da aplicação;
- O layout/design do front deve ser o mais fidedigno possível deste [mockup](invision). Estaremos de olho nos `margin` e `padding` - fique atento;
- Caso necessário, na pasta [assets](./assets) estão as imagens já exportadas;
- Assim que concluir, abra um **pull request (PR)** com seu trabalho;

### Regras do site de anúncios
- O site é uma lista corrida de anúncios, com **paginação**, **filtros** e **ordenação**;
- Cada anúncio só poderá pertencer a uma categoria (sem categorias filhas);
- Cada anúncio poderá ter até 6 fotos, **não obrigatórias**;
- Logo ao entrar na página os usuários verão todos os anúncios **ordenados e paginados por data de criação**. Na área dos filtros deverão estar as categorias principais dos anúncios;
- Após selecionar uma categoria, apenas os anúncios desta deverão ser exibidos, mantendo a ordenação original;
- Os filtros exibidos dentro da categoria são dinâmicos e devem ser relacionados à categoria;
- O clique no anúncio na lista corrida deverá direcionar para a página de anúncio;
- Fique tranquilo, vc não precisará criar a parte de cadastros! **Mocke** todos os valores no backend e apenas exiba-os no front;

### Requisitos - Backend
- Utilize o framework PHP Laravel na versão 5.3+;
- Seu backend deverá ser apenas uma API Restful;
- Vc deverá armazenar as principais categorias e os filtros de cada categoria;
- Vc deverá armazenar os anúncios, sendo que os detalhes dos anúncios deverão ser filtrados pelos filtros;
- Sua API deverá ser paginada;
- Não se preocupe com autenticação, não estamos avaliando isso aqui ;)

### Requisitos - Frontend
- Utilize VueJS + CSS + HTML5 para fazer o front;
- Cada ação como trocar de página, filtrar, ordenar a lista ou ir para uma página de anúncio deverá alterar a URL corrente;
- Vc deverá **componentizar** sua aplicação, criando arquivos .vue para empacotar blocos reutilizáveis de código;

### Diferenciais - Backend
- Boa documentação;
- Criar camadas bem definidas para comunicação da API (controllers > serviços > repositórios, etc);
- Fazer o uso de traits, interfaces, classes abstratas, commands, etc.;
- Fazer o uso de migrations e factories para persistência de dados;
- Utilizar técnicas de caching e mock de dados (package Faker);
- Utilizar técnicas como injeção de dependência e inversão de controle (IoC);
- Codificar seguindo os princípios de TDD, aplicando uma camada de testes automatizados;

### Diferenciais - Frontend
- Boa documentação;
- Utilizar [Vuex](https://vuex.vuejs.org/en/);
- Uso de pré-processadores CSS ([Sass](http://sass-lang.com), [Less](http://lesscss.org), [Stylus](http://stylus-lang.com));
- Adaptar a página para dispositivos móveis (torná-la responsiva);
- Utilizar alguma automatização ([Grunt](http://gruntjs.com), [Gulp](http://gulpjs.com), [NPM Scripts](https://docs.npmjs.com/misc/scripts));


---

Em caso de dúvidas, [abra uma issue](https://github.com/centrics/fullstack-challenge/issues).

**Boa sorte =]**
