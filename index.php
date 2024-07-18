<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oflix</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #141414;
            color: #fff;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: rgba(20, 20, 20, 0.9);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #e50914;
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
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav ul li a:hover {
            color: #e50914;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('hero.jpg') no-repeat center center/cover;
            text-align: center;
            color: #fff;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
        }

        .hero p {
            font-size: 24px;
            margin: 10px 0 20px;
        }

        .red-button {
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #e50914;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .red-button:hover {
            background-color: #f40612;
            transform: scale(1.05);
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
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
            <a href="https://example.com" class="red-button">Commencez maintenant</a>
        </div>
    </section>

    <footer class="footer">
        <p>© 2024 Oflix. Tous droits réservés.</p>
    </footer>

    <script>
        // Vous pouvez ajouter des interactions JavaScript ici
        document.addEventListener('DOMContentLoaded', () => {
            const heroButton = document.querySelector('.red-button');
            heroButton.addEventListener('click', () => {
                alert('Commencez à regarder maintenant!');
            });
        });
    </script>
</body>
</html>
