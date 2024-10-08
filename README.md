
# Plataforma de Análise de Dados com Dashboard Interativo

## Descrição

Este projeto é uma plataforma web para visualização, análise e geração de relatórios interativos baseados em grandes volumes de dados. Utilizando **Python** para processamento de dados e **Laravel (PHP)** para a criação de um dashboard interativo e gerenciador de usuários, a plataforma permite que os usuários filtrem dados, visualizem gráficos dinâmicos, e exportem relatórios em PDF e Excel.

## Funcionalidades

- **Dashboard Interativo**: Visualize gráficos e tabelas interativos baseados em dados processados.
- **Filtros Avançados**: Aplique filtros por data e outros critérios para personalizar a exibição dos dados.
- **Exportação de Relatórios**: Exporte relatórios filtrados em **PDF** e **Excel**.
- **Processamento de Dados**: Use scripts Python para processar grandes volumes de dados e aplicar modelos de machine learning.
- **Autenticação e Permissões**: Autenticação de usuários e controle de permissões via Laravel.
- **Gráficos Dinâmicos**: Gráficos interativos gerados com **Chart.js**.
  
## Tecnologias Utilizadas

### Backend
- **PHP** com **Laravel** (v8.x ou superior)
- **Python** (v3.x) para processamento de dados e machine learning
- **MySQL** ou **PostgreSQL** para gerenciamento do banco de dados
- **Composer** para gerenciamento de dependências PHP

### Frontend
- **Blade Templates** com Laravel
- **Chart.js** para gráficos dinâmicos
- **Bootstrap** para estilização

### Bibliotecas Python
- **pandas** para análise de dados
- **numpy** para cálculos numéricos
- **scikit-learn** para machine learning
- **matplotlib** para geração de gráficos

### Outras Ferramentas
- **DOMPDF** para geração de PDFs em Laravel
- **Laravel-Excel** para exportação de relatórios em Excel

## Instalação

### 1. Clonar o repositório

```bash
git clone https://github.com/GustaavooC/platform-dashboard.git
cd platform-dashboard
```

### 2. Instalar dependências PHP

Execute o comando abaixo para instalar as dependências do Laravel:

```bash
composer install
```

### 3. Configurar o arquivo `.env`

Copie o arquivo de configuração de exemplo e configure o ambiente:

```bash
cp .env.example .env
```

No arquivo `.env`, configure as credenciais do banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### 4. Gerar a chave da aplicação

```bash
php artisan key:generate
```

### 5. Executar as migrações do banco de dados

```bash
php artisan migrate
```

### 6. Instalar dependências Python

No diretório `python/`, instale as dependências necessárias:

```bash
pip install -r requirements.txt
```

### 7. Servir a aplicação

Para iniciar o servidor Laravel:

```bash
php artisan serve
```

Para rodar os scripts Python para processamento de dados:

```bash
python scripts/data_processing.py
```

## Uso

1. Acesse o dashboard no navegador, geralmente em `http://localhost:8000`.
2. Faça login com suas credenciais (admin).
3. Use os filtros de data para personalizar a visualização dos dados.
4. Exporte relatórios em PDF ou Excel com base nos filtros aplicados.

## Estrutura de Diretórios

```bash
├── app/                    # Código fonte da aplicação Laravel
│   ├── Http/
│   ├── Models/
│   ├── ...
├── public/                 # Arquivos públicos (CSS, JS, Imagens)
├── resources/              # Views e assets
│   ├── views/
│   ├── js/
│   ├── css/
├── routes/                 # Definições de rotas
├── storage/                # Arquivos de cache e logs
├── python/                 # Scripts Python para processamento de dados
│   ├── scripts/
│   └── requirements.txt    # Dependências Python
└── tests/                  # Testes automatizados
```

## Funcionalidades Implementadas

### Filtros Interativos

Os usuários podem aplicar filtros de data para personalizar a exibição dos dados no dashboard. O sistema também permite a exportação de relatórios filtrados:

- **Filtro por intervalo de datas**: Permite a visualização de vendas e receitas entre datas específicas.
- **Filtros adicionais** (categoria, usuário, etc.): Personalize os relatórios conforme a necessidade.

### Exportação de Relatórios

- **Exportação para PDF**: Relatórios dinâmicos podem ser exportados para PDF, com base nos filtros aplicados.
- **Exportação para Excel**: Dados filtrados também podem ser exportados para Excel para uma análise mais aprofundada.

## Contribuições

1. Faça um fork do projeto.
2. Crie uma nova branch com suas modificações:
   ```bash
   git checkout -b minha-nova-funcionalidade
   ```
3. Envie suas alterações:
   ```bash
   git add .
   git commit -m "Minha nova funcionalidade"
   git push origin minha-nova-funcionalidade
   ```
4. Abra um **Pull Request**.

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).

