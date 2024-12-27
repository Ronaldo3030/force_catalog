# Force Catalog - Catálogo de Filmes

## Sobre o Projeto
Force Catalog é uma aplicação web que utiliza a [API de Star Wars](https://swapi.dev/) para exibir um catálogo interativo de filmes da saga. Os usuários podem visualizar todos os filmes organizados por data de lançamento e explorar detalhes como sinopse, elenco e outras curiosidades.

## Funcionalidades

- **Listagem de Filmes**
  - Exibição de todos os filmes da saga
  - Ordenação por data de lançamento
  - Interface intuitiva e responsiva

- **Detalhes do Filme**
  - Nome e número do episódio
  - Sinopse completa
  - Data de lançamento
  - Diretor(a) e produtor(es)
  - Elenco principal
  - Cálculo da idade do filme em anos, meses e dias

- **Filtros e Busca**
  - Filtro por nome
  - Filtro por data de lançamento
  - Sistema de busca por título

- **Registro de Logs**
  - Monitoramento de interações do usuário
  - Histórico de atividades

## Tecnologias Utilizadas

- **Backend**
  - PHP 7.4+ (sem frameworks)
  - Arquitetura MVC
  - cURL para integração com API

- **Frontend**
  - HTML5
  - CSS3
  - JavaScript
  - jQuery
  - Bootstrap

- **Banco de Dados**
  - MySQL

## Pré-requisitos

- PHP 7.4 ou superior
- Servidor local (XAMPP, MAMP, etc.)
- MySQL
- Composer

## Instalação

1. Clone o repositório
   ```
   git clone <URL_DO_REPOSITORIO>
   cd force-catalog
   ```

2. Instale as dependências
   ```
   composer install
   ```

3. Configure o ambiente
   - Copie o arquivo `.env.example` para `.env`
   - Configure as variáveis de ambiente:
     - Credenciais do banco de dados
     - URL base da aplicação
     - Outras configurações necessárias

4. Configure o banco de dados
   - Crie um novo banco de dados MySQL
   - Importe o arquivo SQL fornecido (se disponível)

5. Inicie o servidor
   - Configure seu servidor local
   - Aponte para o diretório do projeto

6. Acesse a aplicação
   - Abra http://localhost/force-catalog no navegador

## Estrutura do Projeto

```
force-catalog/
├── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
├── public/
├── config/
├── database/
└── tests/
```

## API Endpoints

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/api/films` | Lista todos os filmes |
| GET | `/api/films/{id}` | Retorna detalhes de um filme específico |

## Roadmap

- [ ] Sistema de autenticação
- [ ] Lista de filmes favoritos
- [ ] Interface mobile-first
- [ ] Dashboard com estatísticas
- [ ] Cache de requisições API
- [ ] Testes automatizados

## Como Contribuir

1. Faça um Fork do projeto
2. Crie uma Branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a Branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Contato

Para questões e sugestões, por favor abra uma [issue](https://github.com/ronaldo3030/force-catalog/issues).