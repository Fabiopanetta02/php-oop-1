<?php

class Movie 
{
    public $name;
    public $description;
    public $year;
    public $genre;
    public $length;
    public $language;

    public function __construct ($name, $description, $year, $genre, $length, $language)
    {
        $this->name = $name;
        $this->description = $description;
        $this->year = $year;
        $this->genre = $genre;
        $this->length = $length;
        $this->language = $language;
    }

    public function getFullTitle()
    {
        return 'Il film si intitola: ' . $this->name . '<br> </br> '. 'Il genere è: ' . $this->genre . '<br> </br> ' . 'Data di uscita: ' . $this->year. '<br> </br> ' . 'Ha una durata di: ' . $this->length . '<br> </br> ' . 'Lingua originale: ' . $this->language . 
        '<br> </br> ' . 'La trama è la seguente: ' . $this->description . '<br> </br> ';
    }
}

$movie1 = new Movie ('Uncharted', 'I fratelli Nathan e Sam Drake vengono catturati dalla sicurezza per aver cercato di rubare la prima mappa realizzata dopo la spedizione di Magellano', '2022', 'Azione e Avventura', '116 min', 'Inglese');
$movie2 = new Movie ('6 Undeground', 'Sei individui provenienti da tutto il mondo, ognuno il migliore nel proprio campo, vengono scelti non solo per le loro abilità, ma per il desiderio comune di cancellare il loro passato per un futuro migliore. La squadra è riunita da un leader chiamato Uno, la cui unica missione nella vita è garantire le loro azioni.', '2019', 'Avventura', '128 min', 'Inglese');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> <?= $movie1->getFullTitle() ?></li>
        <li> <?= $movie2->getFullTitle() ?></li>
    </ul>
</body>
</html>

