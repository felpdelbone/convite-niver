<?php

function gerarConvite($nome) {
    $numeroWhatsApp = "5515998584830"; // Coloque o número do WhatsApp aqui, incluindo o código do país.
    $mensagem = urlencode("Oi clau gostaria de confirmar minha presença. Somos em 3 (quantidade de pessoa) pessoas."); // Mensagem que será enviada pelo WhatsApp.

    return "
        <html>
            <head>
                <link href='https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap' rel='stylesheet'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <style>
                    body {
                        font-family: 'Roboto', sans-serif;
                        background-color: #ffffff; /* Fundo branco */
                        color: #b8860b; /* Dourado */
                        text-align: center;
                        padding: 20px;
                    }
                    .convite-container {
                        background-color: #ffffff;
                        border: 3px solid #b8860b; /* Borda dourada */
                        border-radius: 15px;
                        padding: 30px;
                        max-width: 600px;
                        margin: 0 auto;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }
                    h2 {
                        font-family: 'Pacifico', cursive;
                        color: #daa520; /* Dourado mais vivo */
                        font-size: 2.5em;
                    }
                    p {
                        font-size: 16px;
                        line-height: 1.6;
                    }
                    ul {
                        list-style-type: none;
                        padding: 0;
                    }
                    ul li {
                        background-color: #f9f9f9; /* Fundo suave para o item */
                        color: #b8860b; /* Dourado */
                        margin: 5px 0;
                        padding: 10px;
                        border-radius: 5px;
                        border: 1px solid #b8860b; /* Borda dourada */
                    }
                    .btn-confirm {
                        display: inline-block;
                        background-color: #b8860b; /* Botão dourado */
                        color: #ffffff;
                        text-decoration: none;
                        padding: 10px 20px;
                        border-radius: 5px;
                        margin-top: 20px;
                        font-weight: bold;
                    }
                    .btn-confirm:hover {
                        background-color: #aa7f00; /* Dourado mais escuro no hover */
                    }

                    /* Media Queries para tornar o convite responsivo */
                    @media (max-width: 768px) {
                        .convite-container {
                            padding: 20px;
                            width: 90%;
                        }
                        h2 {
                            font-size: 2em;
                        }
                        p {
                            font-size: 14px;
                        }
                        .btn-confirm {
                            padding: 10px 15px;
                            font-size: 14px;
                        }
                    }

                    @media (max-width: 480px) {
                        .convite-container {
                            padding: 15px;
                            width: 95%;
                        }
                        h2 {
                            font-size: 1.8em;
                        }
                        p {
                            font-size: 13px;
                        }
                        ul li {
                            padding: 8px;
                            font-size: 13px;
                        }
                        .btn-confirm {
                            padding: 8px 12px;
                            font-size: 13px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class='convite-container'>
                    <h2>Niver da Clau 4.9</h2>
                    <p>Olá!</p>
                    <p>É com muita alegria que convido você para o meu aniversário!</p>
                    <p><strong>Data:</strong> 12 de outubro de 2024</p>
                    <p><strong>Local:</strong> Minha casa, Rua Exemplo, 123, Bairro Feliz</p>
                    <p>Para deixar o evento ainda mais divertido, não se esqueça de trazer:</p>
                    <ul>
                        <li>Seu kit churrasco</li>
                        <li>Seu cooler com a bebida de sua escolha</li>
                    </ul>
                    <p>Por favor, confirme sua presença até o dia 10 de outubro para que possamos nos organizar da melhor forma.</p>
                    <a href='https://wa.me/$numeroWhatsApp?text=$mensagem' target='_blank' class='btn-confirm'>Confirmar Presença</a>
                    <p>Conto com você para tornar esse dia ainda mais especial!</p>
                    <p>Abraços</p>
                </div>
            </body>
        </html>
    ";
}

$nome = "João";
echo gerarConvite($nome);

?>
