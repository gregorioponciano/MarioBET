<p align="center"><a href="https://viper.casino/" target="_blank"><img src="/public/image/gp.jpeg" width="400" alt="MarioBET Logo"></a></p>

<p align="center"><a href="https://viper.casino/" target="_blank"><img src="/public/image/mariobet.png" width="150" alt="MarioBET Logo"></a></p>

## Sobre o MarioBET

O MarioBET é uma plataforma de cassino online desenvolvida utilizando Laravel e Filament php. A plataforma oferece uma variedade de funcionalidades, incluindo modelos de remuneração CPA e Revshare, além de integrar os principais provedores de jogos do mercado.
O cassino tem recursos como:

- Autenticação com Google.
- Sistema de Afiliados com RevShare e CPA.
- Integração com Games Slotegrator.
- Integração com Games Salsa.
- Integração com Games Fivers, método Seamless
- Sistema de Notificação.
- Painel de Controle.
- Gateway de Pagamento BsPay.
- Gateway de Pagamento Suitpay.
- Customização dos Banners e Slide.
- Painel da Fivers.
- e outros.

## Instalação

A instalação é bastante simples, seguindo os padrões de projetos do Laravel. Você apenas necessita de um servidor com os [requisitos 
exigidos para executar um projeto Laravel 10](https://laravel.com/docs/7.x#server-requirements). Abaixo, disponibilizamos alguns vídeos que orientam sobre a configuração da hospedagem VPS para o projeto.


#### Esse Vídeo vai ensinar como configurar o Cloudflare e o domínio.

[![Watch the video](https://www.youtube.com/watch?v=c1ioNxZ9Zsc)](https://www.youtube.com/watch?v=c1ioNxZ9Zsc)


#### Esse Vídeo vai ensinar a vocês como configurar uma VPS na hostinger para o projeto.

[![Watch the video](https://www.youtube.com/watch?v=c1ioNxZ9Zsc)](https://www.youtube.com/watch?v=c1ioNxZ9Zsc)


1. Você precisa definir a URL do seu site no .env, sem a barra

```.env
    APP_URL=seusiteaqui.com
```

2. Você também precisa por as credenciais do seu banco de dados.

```.env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nomedodb
    DB_USERNAME=root
    DB_PASSWORD=
```

3. Tem uma pasta chamada sql, com um arquivo Mario.sql, você precisa carregar ele no seu phpMyAdmin

4. Após colocar as chaves do Suitpay, você precisa configurar lá na Suitpay o seu IP, e também o seu endpoint que é:
```
https://seusite.com/suitpay/callback
```

### Equipe

- **[GPWebSolution (Criador)](https://www.instagram.com/gpwebsolution/)**


Esta é uma versão simplificada do nosso projeto; contudo, dispomos de outras versões mais avançadas e abrangentes.
[Siga nossa página para tutoriais e dicas de Igaming](https://www.facebook.com/profile.php?id=61580637924160).








