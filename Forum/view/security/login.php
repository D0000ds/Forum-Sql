<div class="container-home">
    <div class="card">
        <div class="card-title">
            <h1>Connexion</h1>
        </div>
        <div class="container-form-inscription">
            <div class="container-form-blob">
                <svg width="283" height="308" xmlns="http://www.w3.org/2000/svg">
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#883ba3">
                        <animate attributeName="stop-color" values="#883ba3;#735bf3;#883ba3" dur="6s" repeatCount="indefinite" />
                        </stop>
                        <stop offset="100%" stop-color="#735bf3">
                        <animate attributeName="stop-color" values="#735bf3;#883ba3;#735bf3" dur="6s" repeatCount="indefinite" />
                        </stop>
                    </linearGradient>
                    <path d="M300,150C350,200,400,300,200,400S66.5,200,100,150C133.5,100,250,100,300,150"
                    fill="url(#gradient)" />
                </svg>
            </div>
            <form action="index.php?ctrl=security&action=login" method="post" class="form-incription">
                <input type="text" name="pseudo" class="form-inscription-input" placeholder="Username" required >
                <input type="password" name="password" class="form-inscription-input" placeholder="Mot de passe" required>
                <input type="submit" name="login" value="Connexion" class="form-inscription-submit" required>
            </form>
        </div>
    </div>
</div>