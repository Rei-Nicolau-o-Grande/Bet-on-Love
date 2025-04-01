# Bet on Love ou Aposte no Amor
Onde você pode apostar no amor e lucrar.

### Como funciona?
- O usuário se cadastra e faz uma aposta em um casal.
- Se o casal se separar, o usuário ganha.
- Se o casal continuar junto, o usuário perde a aposta.
- O valor da aposta é definido pelo usuário.
- O usuário pode apostar em quantos casais quiser.
- Quem acerta a data da separação ganha um prêmio extra.

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

- Criar as migrações e popular o banco de dados
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
