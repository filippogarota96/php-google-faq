<?php
// Riscrivere questa pagina del sito google
// https://policies.google.com/faq.
// Ci sono diverse domande con relative risposte.
// Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.

// 1. creo array di domande e risposte
$faq = [
  [
    "domanda" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    "risposta" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
  ],
  [
    "domanda" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "risposta" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online. Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo. "
  ],
  [
    "domanda" => "Perché il mio account è associato a un paese?",
    "risposta" => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:"
  ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google FAQ </title>
</head>

<body>
  <?php foreach ($faq as $element) : ?>
    <h2><?= $element["domanda"]; ?></h2>
    <p><?= $element["risposta"]; ?></p>
  <?php endforeach; ?>

</body>

</html>