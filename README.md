# Bet on Love ou Aposte no Amor
Onde você pode apostar no amor e lucrar.

### Como funciona?
- O usuário se cadastra e faz uma aposta em um casal.
- Se o casal se separar, o usuário ganha.
- Se o casal continuar junto, o usuário perde a aposta.
- O valor da aposta é definido pelo usuário.
- O usuário pode apostar em quantos casais quiser.

### Lógica de Posicionamento de Tickets
A funcionalidade de posicionamento de tickets é responsável por classificar os tickets associados a um post
baseado na proximidade de suas datas de término (end_date) em relação à finish_date do post.
Como funciona:
Intervalo de 2 Semanas:
A lógica considera um intervalo de 2 semanas antes e 2 semanas depois da finish_date do post. O sistema filtra
os tickets cujo end_date esteja dentro desse intervalo.

**Classificação dos Tickets:**

**Top 10 Mais Próximos:**
Os 10 tickets com as datas de término mais próximas à finish_date (dentro do intervalo de 2 semanas)
são classificados e recebem uma posição específica.

**1º lugar:** Primeiro ticket mais próximo.

**2º lugar:** Segundo ticket mais próximo.

**Até o 10º lugar:** Seguindo essa ordem.

**Tickets Fora do Top 10:**
Todos os tickets dentro do intervalo de 2 semanas, mas que não estão entre os 10 mais próximos, são marcados como Loser.

**Tickets Fora do Intervalo:**
Qualquer ticket cuja end_date esteja fora do intervalo de 2 semanas antes ou depois da finish_date também
é marcado como Loser.

# Instalando localmente com Docker

- Configurar o alias do sail
```bash
    alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```

mais informações do em: https://laravel.com/docs/11.x/sail#configuring-a-shell-alias

- Subir o container do Docker
```bash
    sail up -d
 ```

- Instalar as dependências do composer
```bash
    sail composer install
```

- Instalar as dependências do NPM
```bash
    sail npm install
```

- Criar o arquivo .env
```bash
    cp .env.example .env
```

- Configurar o ADMIN no arquivo .env
```
ADMIN_USERNAME=
ADMIN_EMAIL=
ADMIN_PASSWORD=
```

- Gerar a chave da aplicação
```bash
    sail artisan key:generate
```

- Criar as migrações e criar Roles e AdminUser
```bash
    sail artisan migrate:fresh --seed --seeder=RoleAndAdminSeeder
```
ou popular todo o banco de dados
```bash
    sail artisan migrate:fresh --seed
```

- Subindo Servidor
```bash
    sail artisan serve
```
ou
```bash
    sail npm run dev
```

- Acessar a aplicação
```bash
    http://localhost
```
