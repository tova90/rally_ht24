<?php

require_once 'slide.php';

$teams = array(
    // Name => (number, number of members, flair)
    // Available flairs: <small>, <blue>, <smallblue>, <free>, <legends>
    'Viktat Projektivt Rum'        => array(1, 9),
    'Enar Åkered'                  => array(2, 9, '<free>'),
    'Senaste Laget'                => array(3, 8),
    'Golden Goobers'               => array(4, 9, '<blue>'),
    //'Femte gången gillt'           => array(5, 9),
    'Ibsens Kusiner'               => array(6, 9),
    'Så att säga'                  => array(7, 3, '<small'), 
    'Katlas Kompisar'              => array(8, 9, '<free>'),
    'Öset Luhring'                 => array(10, 8, '<legends>'),
    'Sötgötarna'                   => array(11, 7),
    'Buzzin'                       => array(12, 9, '<blue>'),
    'RRL för Claes Elfsberg'       => array(13, 9),
    'Tegalreden'                  => array(15, 5, '<small'), 
    'Ingenjörer på gränsen'        => array(42, 8),
    'Trial & Error'                => array(88, 9),
    'Webus Express'                => array(828, 9, '<free>')
);

$bluerebus = array(3, 4, 6, 7);
$bluehelprebus = array(2, 3, 4, 6, 7, 8);

$events = array(
    // Rebusar
    'R 1' => 'Rebus 1',
    'R 2' => 'Rebus 2',
    'R 3' => 'Rebus 3',
    'R 4' => 'Rebus 4',
    'R 5' => 'Rebus 5',
    'R 6' => 'Rebus 6',
    'R 7' => 'Rebus 7',
    'R 8' => 'Rebus 8',

    // Stjälp
    'S 1' => 'Stjälp 1',
    'S 2' => 'Stjälp 2',
    'S 3' => 'Stjälp 3',
    'S 4' => 'Stjälp 4',
    'S 5' => 'Stjälp 5',
    'S 6' => 'Stjälp 6',
    'S 7' => 'Stjälp 7',
    'S 8' => 'Stjälp 8',
    'S 9' => 'Stjälp 9',
    'S 10' => 'Stjälp 10',
    'S 11' => 'Stjälp 11',
    'S 12' => 'Stjälp 12',

    // Blåbärshjälp
    'X 2' => 'Blåbärhjälp 2',
    'X 3' => 'Blåbärhjälp 3',
    'X 4' => 'Blåbärhjälp 4',
    'X 6' => 'Blåbärhjälp 6',
    'X 7' => 'Blåbärhjälp 7',
    'X 8' => 'Blåbärhjälp 8',

    'ÖppReb' => 'Öppnat stjälprebuskuvertet',

    'ÖppPlk' => 'Öppnat stjälpfotoplockkuvertet',
    'StjPlk' => 'Redovisade stjälpfotoplock',

    'ÖppTlk' => 'Öppnat stjälptallriksplockkuvertet',
    'StjTlk' => 'Redovisade stjälptallriksplock',

//Pyssel
    'P MUS' => 'Pyssel: Melodikrysset',
    'P SHA' => 'Pyssel: Vad händer i Shakespears pjäser?',
    'P SEN' => 'Pyssel: Vad kommer sen, och därefter?',
    'P GOD' => 'Pyssel: Godis är gott',
    'P TEM' => 'Pyssel: Teman',
    'P IDI' => 'Pyssel: Idiotfrågan',
    'P BLO' => 'Pyssel: Blodsugare',
    'P RÖD' => 'Pyssel: Röda vätskor som definitivt inte är blod',
    'P NON' => 'Pyssel: Nonogram',
    'P LJU' => 'Pyssel: Ljudkalendrar',
    'P KEX' => 'Pyssel: Kexpoesi',
    'P MUT' => 'Pyssel: Mutter utan utter',
    'P OMG' => 'Pyssel: Åh herregud',
    'P SYN' => 'Pyssel: Syntolkade fotoplock',

    'Stil' => 'Stil och finess',

    'Tid S' => 'Tidsprickar vid Start',
    'Tid L' => 'Tidsprickar vid Lunch',
    'Tid M' => 'Tidsprickar vid Mål',

    'TP 1' => 'Tallriksplock 1',
    'TP 2' => 'Tallriksplock 2',
    'TP 3' => 'Tallriksplock 3',
    'TP 4' => 'Tallriksplock 4',
    'TP 5' => 'Tallriksplock 5',
    'TP 6' => 'Tallriksplock 6',
    'TP 7' => 'Tallriksplock 7',
    'TP 8' => 'Tallriksplock 8',

    'FP 1' => 'Fotoplock 1',
    'FP 2' => 'Fotoplock 2',
    'FP 3' => 'Fotoplock 3',
    'FP 4' => 'Fotoplock 4',
    'FP 5' => 'Fotoplock 5',
    'FP 6' => 'Fotoplock 6',
    'FP 7' => 'Fotoplock 7',
    'FP 8' => 'Fotoplock 8',
);

$parts = array(
    '*picture*Rebusrally September 2024:firstpage.png',

    // Om du vill ha en bild som representerar Etapp #n så kan du bara spara en bild
    // med namn 'etapp1.jpg' eller 'etapp4.png' i din resultatmapp så kommer den 
    // automagiskt att bli visad.
    '*picture*Rallykarta HT2024:karta.jpg',

    'Etapp 1' => array('Tid S', 'R 1', 'P GOD', 'TP 1', 'FP 1'),

    'Etapp 2' => array( 'R 2', 'P SEN', 'TP 2', 'FP 2'),
    'Totalt efter Etapp 2' => array('*sumcomp*', 'Etapp 1', 'Etapp 2'),

    'Etapp 3' => array('R 3','P SHA', 'TP 3', 'FP 3'),
    'Totalt efter Etapp 3' => array('*sumcomp*', 'Totalt efter Etapp 2', 'Etapp 3'),

    // '*picture*Etapp 4 - Med Melodikrysset:Musikkryss.png',
    'Etapp 4' => array(
        'R 4', 'P GOD', 'P MUS', 'TP 4', 'FP 4', 'Tid L'),
    'Totalt efter Etapp 4' => array('*sumcomp*', 'Totalt efter Etapp 3', 'Etapp 4'),

    'Lunch' =>
    array(
        'P BLO',
        'P IDI',
        'P RÖD',
        '*picture*Stjälpfotoplock:stjälpplock.png',
        'ÖppPlk',
        'StjPlk',
        '*picture*Stjälptallriksplock:stjälptallrik.png',
        'ÖppTlk',
        'StjTlk',
        array('*esum*', 'Stjälpplock totalt', 'ÖppPlk', 'StjPlk', 'ÖppTlk', 'StjTlk'),
        // Redovisning stjälpplock
        'ÖppReb',
        'S 1', 'S 2', 'S 3', 'S 4', 'S 5', 'S 6', 'S 7',
        'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
        // Summering av stjälprebusar
        array('*esum*', 'Stjälprebusar totalt',
              'ÖppReb',
              'S 1', 'S 2', 'S 3', 'S 4', 'S 5',
              'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 
              'S 11', 'S 12'
        ),
    ),
    'Totalt efter Lunch' => array('*sumcomp*', 'Totalt efter Etapp 4', 'Lunch'),

    'Etapp 5' => array('R 5', 'P NON', 'TP 5', 'FP 5'),
    'Totalt efter Etapp 5' => array('*sumcomp*', 'Totalt efter Lunch', 'Etapp 5'),

    'Etapp 6' => array('R 6', 'P LJU', 'P KEX', 'TP 6', 'FP 6'),
    'Totalt efter Etapp 6' => array('*sumcomp*', 'Totalt efter Etapp 5', 'Etapp 6'),

    'Etapp 7' => array('R 7', 'P MUT', 'TP 7', 'FP 7'),
    'Totalt efter Etapp 7' => array('*sumcomp*', 'Totalt efter Etapp 6', 'Etapp 7'),

    'Etapp 8' => array('R 8', 'P OMG', 'P SYN', 'TP 8', 'FP 8', 'Tid M'),

    // PRISUTDELNINGAR
    '*picture*Prisutdelning:nobel.jpg',

    // Stilpris
    '*picture*Stilpriset:stylish.png',
    // Här kan det vara kul att lägga några bilder från dagen
    '*sorted*Stil',

    // Plockpris
    '*picture*Bästa plockare:plock.jpg',
    'Plock totalt' =>
    array('*sum*',
          'TP 1', 'TP 2', 'TP 3', 'TP 4', 'TP 5', 'TP 6', 'TP 7', 'TP 8',
          'FP 1', 'FP 2', 'FP 3', 'FP 4', 'FP 5', 'FP 6', 'FP 7', 'FP 8',
          'ÖppPlk', 'StjPlk', 'ÖppTlk', 'StjTlk'),

    // Pysselpriset
    '*picture*Pysselpriset:pyssel.jpg', //
    'Pyssel totalt' =>
    array('*sum*',
    'P MUS', 'P SHA', 'P SEN', 'P GOD', 'P TEM', 'P IDI', 'P BLO',
    'P RÖD', 'P NON', 'P LJU', 'P KEX', 'P MUT', 'P OMG', 'P SYN'),


    // Rebuspriset
    //'*picture*Rebuspriset:a-dur.png', Lägg in bild på rebuspriset
    'Rebusar totalt' =>
    array('*sum*',
          'ÖppReb', 'S 1', 'S 2', 'S 3', 'S 4',
          'S 5', 'S 6', 'S 7', 'S 8', 'S 9', 'S 10', 'S 11', 'S 12',
          'R 1', 'R 2', 'R 3', 'R 4',
          'R 5', 'R 6', 'R 7', 'R 8'),

    '*picture*Och vinnaren är...:resultat.png',
    'Slutresultat' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Ständiga tvåan' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Blåbärspriset' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Bästa småbil' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Bästa utlänska lag' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Mittenpriset' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    'Sura trean' => array('*sum*', 'Totalt efter Etapp 7', 'Etapp 8', 'Stil'),
    '*picture*Grattis!:trophy.jpg', //Skriv in vinnande lag här
    );


$maxPoints = array(
    'P MUS' => 24,
    'P SHA' => 13,
    'P SEN' => 20,
    'P GOD' => 17,
    'P TEM' => 28,
    'P IDI' => 15,
    'P BLO' => 24,
    'P RÖD' => 20,
    'P NON' => 0,
    'P LJU' => 24,
    'P KEX' => 10,
    'P MUT' => 24,
    'P OMG' => 26,
    'P SYN' => 24,
);

$info = array(
    'P MUS' => '<red>1 per fel',
    'P SHA' => '<red>1 per fel',
    'P SEN' => '<red>Notera att det för varje uppgift ska fyllas i tre svar. Varje svar motsvarar 1/3 prick, i summering i slutet avrundar vi snällt',
    'P GOD' => '<red>1 per fel',
    'P TEM' => '<red>"Notera att det för varje uppgift ska fyllas i fem svar, eller två beroende på hur man ser på saken (tema samt vad varje bild föreställer). -1prick för varje korrekt tema, -1prick för korrekt förklaring av tema (kan alltså få max -1prick om man inte motiverar sina svar och -2prickar även med fel svar så länge motiveringen håller). Bristfälliga motiveringar, kan exempelvis bara koppla till tre av fyra bilder, ger delpoäng i form av 0,25prick per bild (tema plus tre bilder skulle exempelvis ge 1,75poäng) som efter summering i slutet avrundas uppåt till närmsta hela poäng"',
    'P IDI' => '<red>0,5 prick per fel',
    'P BLO' => '<red>2 per fel',
    'P RÖD' => '<red>2 per fel',
    'P NON' => '<red>+/-0prickar för blankt eller fel lösningar, -1prick styck för att klara uppgift 1, -2prickar för att klara uppgift 2 och så vidare upp till -6prickar för att lösa uppgift 6',
    'P LJU' => '<red>-1prick för varje rätt år och -1prick för varje korrekt titel oberoende av varandra',
    'P KEX' => '<red>Att inte lämna in alls ger +10prickar. Att lämna in något knappt läsbart är värt 0prickar. En bra dikt är värd -5prickar. Våran/våra favorit(-er) kan få -10prickar. Bedömning på plats kan ändras.',
    'P MUT' => '<red>Varje rätt svar är värt 1,5prickar. Alternativa svar kan också ge poäng och då kan de ge hela poäng eller delpoäng beroende på hur bra vi tycker att de är.',
    'P OMG' => '<red>1/3 prick per svar i tabellen. Upp till 1 prick per fråga',
    'P SYN' => '<red>-3prickar för varje bild som skickas in som vi bedömmer följer given beskrivning. Tappra försök kan få -1 eller -2prickar beroende på hur bra vi tycker att de är',
    'P .*' => '<red>1 prick per fel',
    
    'ÖppReb' => '40',
    'ÖppPlk' => '80',
    'ÖppTlk' => '30',
    'StjPlk' => '-10 per bild',
    'StjTlk' => '-5 per tallrik',
    
    'Tid S' => '1 per minut',
    'Tid L' => '1 per minut',
    'Tid M' => '1 per minut, 2 efter 17:30',

    'R [0-9]+' => '25 klippt hjälp, 45 klippt nöd',
    'S [0-9]+' => '-10 korrekt motiverad lösning',
    'FP [0-9]+' => '10 missat plock, 20 falskt plock',
    'TP [0-9]+' => '5 missat plock, 10 falskt plock'
);
?>
