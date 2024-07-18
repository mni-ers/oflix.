<html lang="fr"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oflix</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: #ffffff;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #141414;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav ul li {
            margin-left: 20px;
        }

        .nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            background: url('hero.jpg') no-repeat center center/cover;
            text-align: center;
            color: #ffffff;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
        }

        .hero p {
            font-size: 24px;
            margin: 10px 0;
        }

        .hero button {
            padding: 10px 20px;
            font-size: 18px;
            color: #ffffff;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #333333;
            border-radius: 10px;
            overflow: hidden;
            width: calc(33.333% - 20px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card h3 {
            padding: 10px;
            font-size: 20px;
            margin: 0;
        }

        .footer {
            background-color: #141414;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">Oflix</div>
        <nav class="nav">
            <ul>
                <li><a href="https://o-flix.netlify.app/">Accueil</a></li>
                <li><a href="#">Films</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenue sur Oflix</h1>
            <p>Regardez vos films préférés en un clic.</p>

            <style>
        .red-button {
            padding: 10px 20px;
            font-size: 18px;
            color: #ffffff;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
    </style>


    <a href="https://example.com" class="red-button">Commencez maintenant</a>
        </div>
    </section>

    <footer class="footer">
        <p>© 2024 Oflix. Tous droits réservés.</p>
    </footer>

    <script>
        // Vous pouvez ajouter des interactions JavaScript ici
        document.addEventListener('DOMContentLoaded', () => {
            const heroButton = document.querySelector('.hero button');
            heroButton.addEventListener('click', () => {
                alert('Commencez à regarder maintenant!');
            });
        });
    </script>

</body></html>
