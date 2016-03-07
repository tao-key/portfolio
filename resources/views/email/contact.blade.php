<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  	<h1>Sujet : {{ $sujet }}</h1>
    <h2>De : {{ $name }} {{ $prenom }}</h2>
    <p><strong>Prise de contact :</strong></p>
    <ul>
      <li><strong>Nom</strong> : {{ $name }}</li>
      <li><strong>Prénom</strong> : {{ $prenom }}</li>
      <li><strong>Email</strong> : {{ $email }}</li>
      <br>
      <li><strong>Message</strong> : {{ $content }}</li>
    </ul>
  </body>
</html>