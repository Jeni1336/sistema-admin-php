<?php
session_start();


if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agendador Online</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f1f1f1;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 16px;
    }

    button {
      width: 100%;
      background-color: #3b82f6;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color:#2563eb;
    }

    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }

      h2 {
        font-size: 22px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Agendador Online</h2>
    <form>
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <label for="data">Data</label>
      <input type="date" id="data" name="data" required>

      <label for="hora">Horário</label>
      <input type="time" id="hora" name="hora" required>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" rows="4" placeholder="Ex: Consulta médica, reunião..." required></textarea>

      <button type="submit">Agendar</button>
    </form>
  </div>
</body>
</html>
