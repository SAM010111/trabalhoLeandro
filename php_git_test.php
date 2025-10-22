<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP - Git</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 30px;
            text-align: center;
        }
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #667eea;
        }
        .info-box h2 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .info-box p {
            color: #666;
            line-height: 1.6;
        }
        .status {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            margin-top: 10px;
        }
        .success {
            background: #d4edda;
            color: #155724;
        }
        form {
            margin-top: 30px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            outline: none;
            border-color: #667eea;
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }
        button:hover {
            transform: translateY(-2px);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #e7f3ff;
            border-radius: 8px;
            border-left: 4px solid #2196F3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Teste PHP + Git</h1>
        
        <div class="info-box">
            <h2>Informações do Servidor</h2>
            <p><strong>PHP Versão:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
            <p><strong>Data/Hora:</strong> <?php echo date('d/m/Y H:i:s'); ?></p>
            <span class="status success">✓ PHP Funcionando</span>
        </div>

        <div class="info-box">
            <h2>Sistema Operacional</h2>
            <p><?php echo php_uname(); ?></p>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = htmlspecialchars($_POST['nome'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            
            if (!empty($nome) && !empty($email)) {
                echo '<div class="result">';
                echo '<h2>Dados Recebidos:</h2>';
                echo '<p><strong>Nome:</strong> ' . $nome . '</p>';
                echo '<p><strong>Email:</strong> ' . $email . '</p>';
                echo '<p><strong>IP:</strong> ' . $_SERVER['REMOTE_ADDR'] . '</p>';
                echo '</div>';
            }
        }
        ?>

        <form method="POST" action="">
            <h2 style="margin-bottom: 20px; color: #333;">Testar Formulário</h2>
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu email" required>
            <button type="submit">Enviar Dados</button>
        </form>
    </div>
</body>
</html>
