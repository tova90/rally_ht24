<?php

require_once 'slide.php';

$teams = array(
               // Name => (number, number of members, flair)
               // Available flairs: <small>, <blue>, <smallblue>
               'Mahjonggång'                       => array(1, 5),
               'Stor och Liten'                    => array(2, 5),
               'Risk för Pråligt Väglag'           => array(3, 5),
               'Blodkropparna'                     => array(4, 5),
               'Hattifnattarna'                    => array(5, 5),
               'Nyfikna Frågvisa Cyklister '       => array(6, 5),
               'Trial & Error'                     => array(7, 5),
               'Katlas Kompisar'                   => array(8, 5),
               'De knallar oss joggs'             => array(9, 5),
               );

// Blåbärsrebusar
$bluerebus = array();

$events = array(
    // Rebusar
    'R 1' => 'Rebus 1',
    'R 2' => 'Rebus 2',
    'R 3' => 'Rebus 3',
    'R 4' => 'Rebus 4',
    'R 5' => 'Rebus 5',

    // Bonus

    // inga stjälpplock

    // Heldagspyssel
    'P MUS' => 'Das Musikkryss',
    'P GIB' => 'Gasen i botten, Tony Montana II',
    'P OFL' => 'Ordfläta',
    'P FRV' => 'Ordförvandling',
    'P POP' => 'Portar och portaler',
    'P TFL' => 'Topp fem länder',
    'P VPK' => 'Var på kartan',
    'P HATT' => 'Hatt GPT',

    'Stil' => 'Stil och finess',

    'Tid S' => 'Tidsprickar vid Start',
    'Tid M' => 'Tidsprickar vid Mål',


      // 5 rebusar - 5 fotoplock
    'FP 1' => 'Fotoplock 1',
    'FP 2' => 'Fotoplock 2',
    'FP 3' => 'Fotoplock 3',
    'FP 4' => 'Fotoplock 4',
    'FP 5' => 'Fotoplock 5',
    );

$parts = array(
    '*picture*Start:firstpage.jpg',

    'Etapp 1' => array('Tid S', 'R 1', 'P MUS', 'FP 1'),

    'Etapp 2' => array('R 2', 'P GIB', 'P TFL', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sumcomp*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3', 'P OFL', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sumcomp*', 'Totalt efter Etapp 2', 'Etapp 3'),

    'Etapp 4' => array('R 4', 'P FRV', 'P HATT', 'FP 4'),
    'Totalt efter Etapp 4' => array('*sumcomp*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Etapp 5' => array('R 5', 'P POP', 'P VPK', 'FP 5', 'Tid M'),

    '*picture*Prisutdelning:lurar.jpg',

    '*picture*Stilpriset:Stilpris.jpg',
    '*sorted*Stil',

    '*picture*Förstapriset:trophy.jpg',
    'Totalt' => array('*sum*', 'Totalt efter Etapp 4', 'Etapp 5', 'Stil'),
    );

$maxPoints =
  array(
    'P MUS' => 11, # 11 frågor
    'P GIB' => 12, # 12 frågor
    'P OFL' => 12, # 12 bilder
    'P FRV' => 24, # 24 frågor
    'P POP' => 15, # 15 frågor, några kan ge fler minus
    'P TFL' => 20, # 4 frågor med 5 länder
    'P VPK' => 15, # 15 frågor
    'P HATT' => 20, # 19 frågor
  );

$info =
  array(
        'P .*' => '1 per fel',

        'Stil' => 'Ner till -30',
        'Tid S' => '1 per minut',
        'Tid M' => '1 per minut efter 2,5 timme. 2 per minut efter 2,5-3,5 timme',
        'R [0-9]+' => '25 klippt hjälp, 45 klippt nöd',
        'X [0-9]+' => '-10 korrekt motiverad lösning',
        'FP [0-9]+' => '10 missat plock, 20 falskt plock',
        );
?>
