-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 19 mei 2017 om 00:45
-- Serverversie: 5.7.18-log
-- PHP-versie: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookonshelf`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `releasedate` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `hired` enum('0','1') DEFAULT NULL,
  `hired_by` varchar(255) DEFAULT NULL,
  `hired_date` varchar(255) DEFAULT NULL,
  `hired_date_max` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `extended` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `releasedate`, `info`, `hired`, `hired_by`, `hired_date`, `hired_date_max`, `extended`) VALUES
(1, 'My way', 'Monica Geuze', '31 december 1899', 'My Way is het openhartige verhaal van vlogger Monica Geuze. Van fotoshoots tot dj-optredens, shopsessies en restaurantbezoekjes: Monica deelt bijna elke dag van haar leven op Youtube en Instagram. Ze heeft meer dan 300.000 abonnees. Ondanks het feit dat M', NULL, NULL, NULL, NULL, NULL),
(2, 'De tolk van Java', 'Alfred Birney', '14 maart 2016', 'Voor een Helmondse schoenmakersdochter, een Indische voormalige oorlogstolk en hun zoon bestaat er geen heden. Alleen een belast verleden. De zoon achtervolgt zijn ouders met vragen over de oorlog in Nederlands-Indië die woedt in het gezin. Hun verhalen', NULL, NULL, NULL, NULL, NULL),
(3, 'Dafne likes kookboek', 'Dafne Schippers', '9 mei 2017', 'Dafne LIKES kookboek staat vol met gezonde recepten, gemaakt van verse ingrediënten die snel op tafel staan en nog razend lekker zijn ook. Dafne geeft aan wat je het beste kunt eten voor en na het sporten. Ook geeft ze tips voor een aantal supersnelle sn', NULL, NULL, NULL, NULL, NULL),
(4, 'Oomen stroomt over', 'Francine Oomen', '24 april 2017', 'Puberteit, zwangerschap: kastenvol zijn er over deze grote hormonenhussels in een vrouwenleven geschreven. Francine Oomen kan erover meepraten als auteur van de succesvolle \'Hoe overleef ik\' reeks, waarmee ze duizenden pubers door een lastige tijd loodste', NULL, NULL, NULL, NULL, NULL),
(5, 'Killerbody dieet', 'Fajah Lourens', '31 augustus 2016', 'In het rijk geïllustreerde Killerbody dieet , helpen Fajah Lourens en haar team van fitnessexperts, voedingsdeskundigen en artsen je om de eerste stappen te zetten om jouw eigen Killerbody te vormen én te behouden. Met haar Killerbody dieet is een gezon', NULL, NULL, NULL, NULL, NULL),
(6, 'Zondagochtend breekt aan', 'Nicci French', '31 december 1899', 'Zondagochtend breekt aan is het spannende zevende deel van de achtdelige Frieda Klein-serie, geschreven door Nicci French.<br /><br />Het begint met een lijk onder de vloer. Frieda deed deze gruwelijke vondst in haar eigen huis - een vondst die haar tot i', NULL, NULL, NULL, NULL, NULL),
(7, 'De tolk van Java', 'Alfred Birney', '11 mei 2017', 'Voor een Helmondse schoenmakersdochter, een Indische voormalige oorlogstolk en hun zoon bestaat er geen heden. Alleen een belast verleden. De zoon achtervolgt zijn ouders met vragen over de oorlog in Nederlands-Indië die woedt in het gezin. Hun verhalen', NULL, NULL, NULL, NULL, NULL),
(8, 'Ach, moedertje', 'Hugo Borst', '31 december 1899', 'Het vervolg op bestseller <a href=\"https://www.bol.com/nl/p/ma/9200000046234118/\">Ma</a>. De moeder van Hugo Borst lijdt sinds enkele jaren aan de ziekte van Alzheimer en woont inmiddels op een gesloten afdeling in het Verpleeghuis. In Ach, moedertje volg', NULL, NULL, NULL, NULL, NULL),
(9, 'Het einde van de eenzaamheid', 'Benedict Wells', '10 mei 2017', 'Het veelgeprezen meesterwerk van een jong Duits talent<br /> <br /> Als de tijd nu eens niet bestond? Als alles wat je beleeft eeuwig was en als niet de tijd aan jou voorbijging, maar jijzelf aan de dingen die je beleeft?<br /> <br />Wanneer Jules Moreau', NULL, NULL, NULL, NULL, NULL),
(10, 'Frieda Klein 7 - Zondagochtend breekt aan', 'Nicci French', '11 april 2017', 'Zondagochtend breekt aan is het spannende zevende deel van de achtdelige Frieda Klein-serie, geschreven door Nicci French.<br /><br />Het begint met een lijk onder de vloer. Frieda deed deze gruwelijke vondst in haar eigen huis - een vondst die haar tot i', NULL, NULL, NULL, NULL, NULL),
(11, 'Prisma Pocket Woordenboek / Nederlands', 'Martha Hofman', '26 augustus 2014', 'Dit is een PRISMA woordenboek - echt waar! Binnen deze kaft vind je het meest uitgebreide pocketwoordenboek Nederlands dat je kunt krijgen. Net als de reguliere editie bevat het bijna 40.000 trefwoorden en 170.000 betekenissen, voorbeeldzinnen en vertalin', NULL, NULL, NULL, NULL, NULL),
(12, 'Mindf*ck', 'Victor Mids', '31 december 1899', 'Victor Mids en Oscar Verpoort geven voor het eerst de geheimen prijs achter hun spectaculaire tv-programma MINDF*CK. Aan de hand van illusies, psychologie, geneeskunde en vingervlugheid geven zij een uniek inkijkje in de werking van je brein.<br /> <br />', NULL, NULL, NULL, NULL, NULL),
(13, 'Het paradijs', 'Suzanne Vermeer', '31 december 1899', 'Wanneer Liza Roozenboom te horen krijgt dat haar zoon Mark op het eiland Corfu vermist is geraakt, stort haar wereld in. Mark is met een meisje dat hij net had ontmoet gaan backpacken en sindsdien heeft niemand meer iets van hem gehoord. Een wekenlange zo', NULL, NULL, NULL, NULL, NULL),
(14, 'Lekker beter', 'Ramon Beuk', '31 december 1899', 'Haal het beste uit je dag door de juiste voeding te kiezen.<br /><br />RV: \'Lekker eten én goed voor jezelf zorgen, dat moet toch samen kunnen gaan?\'<br /> <br />RB: \'Zeker! Geef jij maar aan welke ingrediënten ik mag gebruiken. Dan zorg ik voor de rest', NULL, NULL, NULL, NULL, NULL),
(15, 'Lekker & makkelijk koolhydraatarm', 'Anna-Karina van Denderen', '31 december 1899', 'Ook koolhydraatarm eten moet gewoon verrukkelijk zijn. Punt. <br />In amper twee jaar tijd groeide KoolhydraatarmRecept.nl uit tot het populairste niet-commerciële koolhydraatarme foodblog van Nederland. Maandelijks vinden honderdduizenden bezoekers hun', NULL, NULL, NULL, NULL, NULL),
(16, 'Samengevat - vmbo-kgt Biologie', 'E.J. van der Schoot', '31 december 1899', '<b>Samengevat - vmbo-kgt Biologie</b><br /><br />Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht', NULL, NULL, NULL, NULL, NULL),
(17, 'Sapiens', 'Yuval Noah Harari', '31 december 1899', 'Honderdduizend jaar geleden waren er wel zes verschillende menssoorten. Nu is er maar één soort over, en dat zijn wij. Homo sapiens. Hoe komt het dat alleen wij zijn overgebleven? Hoe kwamen onze voorvaderen op het idee om steden en zelfs koninkrijken t', NULL, NULL, NULL, NULL, NULL),
(18, 'Handlettering doe je zo!', 'Karin Luttenberg', '31 december 1899', 'Handlettering is hot! Geen simpele notitie op een stukje papier, maar een echt ambacht. Met dit handboek van illustratrice en graficus Karin Luttenberg kan iedereen snel zelf aan de slag. Ben je fan van al die mooie plaatjes op instagram en pinterest maar', NULL, NULL, NULL, NULL, NULL),
(19, 'Spiegelzee', 'Salomon Kroonenberg', '17 mei 2017', 'Wie zich zorgen maakt over een stijgende zeespiegel, zo schrijft Salomon Kroonenberg in \'Spiegelzee\', vergeet dat de mensheid zoiets al eerder heeft meegemaakt. Zo\'n 120.000 jaar geleden stond de zeespiegel zes meter hoger dan nu, en lag Amersfoort aan ze', NULL, NULL, NULL, NULL, NULL),
(20, 'De vibe', 'Mark Verhees', '31 december 1899', '<a href=\"https://lees.bol.com/nl/author/mark-verhees\">Lees hier de columns van Mark Verhees</a><br /><br />Gelukkige mensen zijn gezonder, leven langer en gunnen gul. Ze zijn creatiever, energieker en succesvoller. Ze verdienen meer en genieten schaamtelo', NULL, NULL, NULL, NULL, NULL),
(21, 'Chickslovefood - Het kidsproof-kookboek', 'Elise Gruppen', '31 december 1899', '<b>Chickslovefood: lekker en gezond, voor het hele gezin.</b> <br /><br />Kidsproof is een boek van jonge moeders voor jonge ouders: recepten met maximaal zes ingrediënten, die voedzaam en vers zijn, toegespitst op kinderen. <br /><br />Ouders die voor h', NULL, NULL, NULL, NULL, NULL),
(22, 'Samengevat- vmbo-kgt Economie', 'ThiemeMeulenhoff bv', '31 december 1899', 'Wil je jouw examen taal zelfverzekerd maken? Kies dan voor Samengevat!  Met Samengevat taal hebt je meer kans om te slagen! In Samengevat worden alle examenonderwerpen stap-voor-stap uitgelegd. Vaak worden meer oplossingsmethodes voor een type opgave gege', NULL, NULL, NULL, NULL, NULL),
(23, 'Thirteen reasons why', 'Jay Asher', '28 april 2017', 'Stel je voor. Je zit op de middelbare school en bent verliefd - op het meest bijzondere meisje van de klas natuurlijk. Een tijdlang bewonder je haar vanuit de verte. Je weet zeker dat je haar nooit kunt krijgen. En dan opeens, is er die avond. Er gebeurt', NULL, NULL, NULL, NULL, NULL),
(24, 'Judas', 'Astrid Holleeder', '4 november 2016', '\'Een valse hond sluit je op in een hok, of laat je inslapen.’<br /><br />Astrid en Sonja Holleeder besluiten in 2013 te doen wat niemand voor mogelijk hield: ze staan op tegen hun broer Willem – die na zijn vrijlating in 2012 tot nationale knuffelcrim', NULL, NULL, NULL, NULL, NULL),
(25, 'Samengevat - havo Geschiedenis', 'Yvonne Bouw', '31 december 1899', '<b>Samengevat - havo Geschiedenis</b> Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht in de same', NULL, NULL, NULL, NULL, NULL),
(26, 'Homo Deus', 'Yuval Noah Harari', '2 maart 2017', '***BOEK VAN DE MAAND DWDD***<br /><br />Op onnavolgbare wijze beschrijft Yuval Noah Harari in zijn bestseller Sapiens 70.000 jaar menselijke evolutie, maar met Homo Deus richt hij zich op de toekomst. Met zijn kenmerkende vermenging van wetenschap, geschi', NULL, NULL, NULL, NULL, NULL),
(27, 'Meester Mark rekent het goed', 'Mark van der Werf', '31 december 1899', 'Wie beschermt ons tegen boeven en ander gespuis? Mega Mindy!<br />En met Pasen vieren de gelovigen... dat er een konijn aan de deur komt.<br /><br />Gevatte ingevingen, grappige foutjes, bijdehante briefjes: op zijn populaire Facebook- en Instagrampagina\'', NULL, NULL, NULL, NULL, NULL),
(28, 'Samengevat - havo Economie', 'J.P.M. Blaas', '31 december 1899', '<b>Samengevat - havo  Economie</b><br /><br />Meer kans van slagen met Samengevat! Samengevat biedt je een helder en beknopt overzicht van alle examenstof. Met Samengevat kun je grote hoeveelheden stof snel herhalen en overzien. Je krijgt beter inzicht in', NULL, NULL, NULL, NULL, NULL),
(29, 'Je ziet mij nooit meer terug', 'Sonja Barend', '31 december 1899', 'Sonja Barend was decennialang een van de meest vertrouwde gezichten op de Nederlandse televisie. Generaties groeiden op met haar programma’s. Haar heldere en betrokken manier van interviewen was een voorbeeld en inspiratie voor velen. Achter haar elegan', NULL, NULL, NULL, NULL, NULL),
(30, 'Ik zie je op het strand', 'Jill Mansell', '6 mei 2017', 'Ik zie je op het strand is de nieuwe roman van Jill Mansell (van bestsellers als Lang leve de liefde en Je bent geweldig). Romantische verwikkelingen, misverstanden en zussenrivaliteit – een feelgood verhaal dat je niet weg kunt leggen! Perfect voor wie', NULL, NULL, NULL, NULL, NULL),
(31, 'Serie Q - Selfies', 'Jussi Adler-Olsen', '24 maart 2017', 'Ze zijn jong, knap, lopen in merkkleding en besteden dagelijks uren aan hun haar - en daarbij leven ze van een uitkering. Deze jonge vrouwen denken alleen aan zichzelf, maar leiden een levensgevaarlijk bestaan, want langzaam maar zeker zijn ze een doorn i', NULL, NULL, NULL, NULL, NULL),
(32, 'Thirteen Reasons Why', 'Jay Asher', '6 augustus 2009', 'Read this sensational mystery bestseller before you watch the 13-part Netflix series, executive produced by Selena Gomez.<br /><br /><b>You can\'t stop </b><b>the future. You can\'t rewind the past. The only way to learn the secret . . . is to press play.</', NULL, NULL, NULL, NULL, NULL),
(33, 'Op zoek naar de hemel', 'Hans Peter Roel', '31 december 1899', 'Een spirituele reis door drie landen<br /><br /><br />Eva van Berkel is nog maar zeven jaar oud als haar vader komt te overlijden. Op zijn sterfbed belooft hij in de hemel op Eva te wachten. Deze belofte is de reden van haar zoektocht. Eva gaat op reis om', NULL, NULL, NULL, NULL, NULL),
(34, 'Het Bucketlist boek voor koppels', 'Elise De Rijck', '31 december 1899', 'Lees hier het <a href=\"https://lees.bol.com/nl/article/bucketlist-voor-koppels\">artikel </a> over Bucketlist voor koppels. <br /><br />Eindelijk een Bucketlist voor koppels. In dit boek vind je 250 gekke, grappige, unieke, maar soms ook heel serieuze opdr', NULL, NULL, NULL, NULL, NULL),
(35, 'De laatste roos van de zomer', 'Santa Montefiore', '31 december 1899', 'Het magistrale drieluik over de Deverills van Santa Montefiore is nu compleet!<br /> <br /> Ondanks alles wat ze in het verleden hebben gedeeld, botsen de drie vrouwen van Deverill telkens weer als het gaat over de toekomst van hun geliefde kasteel. Intus', NULL, NULL, NULL, NULL, NULL),
(36, 'Mijn niet zo perfecte leven', 'Sophie Kinsella', '28 maart 2017', 'Cat Brenner heeft er genoeg van om een \'nobody\' te zijn. Daarom gaat ze werken op een trendy reclamebureau in Londen. Haar baas Demeter is een helse verschrikking maar daar kan Cat wel tegen. Tot ze totaal onverwacht wordt ontslagen. Met al haar dromen in', NULL, NULL, NULL, NULL, NULL),
(37, 'Versplinterd', 'Karin Slaughter', '18 april 2017', 'Voor iedereen die nog nooit een boek van Karin Slaughter heeft gelezen is Versplinterd de beste kennismaking. Karin Slaughter verstaat als geen ander de kunst om binnen de kaders van het thrillergenre een rijk geschakeerde wereld te creëren aan intrigere', NULL, NULL, NULL, NULL, NULL),
(38, 'Pogingen iets van het leven te maken', 'Hendrik Groen', '31 december 1899', 'Hendrik Groen mag dan oud zijn, hij is nog lang niet dood en niet van plan zich eronder te laten krijgen. Toegegeven: zijn dagelijkse wandelingen worden steeds korter omdat de benen niet meer willen en hij moet regelmatig naar de huisarts. Technisch gespr', NULL, NULL, NULL, NULL, NULL),
(39, 'Vertel eens - Mam, vertel eens', 'Elma van Vliet', '31 december 1899', '<p> <strong>Geef dit boek cadeau, en krijg het met waardevolle verhalen weer terug! </strong> </p> <p> Met deze herziene uitgave van <em>Mam, vertel eens</em> geef je een ultiem cadeau: je belangstelling. Je geeft aan dat je alles wilt weten van het leven', NULL, NULL, NULL, NULL, NULL),
(40, 'Goede dochter', 'Karin Slaughter', '13 juni 2017', 'Achtentwintig jaar geleden: het zorgeloze leven van zusjes Charlotte en Samantha Quinn en hun ouders wordt wreed verstoord door een gruwelijke aanslag. Hun moeder verliest daarbij het leven en hun vader wordt nooit meer de oude. Achtentwintig jaar later:', NULL, NULL, NULL, NULL, NULL),
(41, 'Lekker & simpel', 'Jorrit van Daalen Buissant Des Amorie', '31 december 1899', 'Voor iedereen die hulp nodig heeft bij het beantwoorden van de vraag: \'wat eten we vandaag?\' is er nu het kookboek van Sofia en Jorrit Lekker & Simpel. <br />Geen moeilijke gerechten waar je uren voor in de keuken moet staan maar lekkere en simpele recept', NULL, NULL, NULL, NULL, NULL),
(42, 'De vierde dimensie', 'Hans Peter Roel', '31 december 1899', 'De Vierde Dimensie is een verhaal over de onzichtbare wereld om ons heen, die bepalend is voor succes. Het is een boek dat inzicht geeft in de wetmatigheden die in de vierde dimensie gelden en dat ingaat op de magie van het leven.<br /><br />Wens, werkeli', NULL, NULL, NULL, NULL, NULL),
(43, 'Killerbody 2', 'Fajah Lourens', '31 december 1899', 'Killerbody 2 is de perfecte aanvulling op het succesvolle Killerbody Dieet van Fajah Lourens. Het boek bevat 100 slanke en snelle recepten die snel op tafel staan en volledig Killerbody-proof zijn. Klaar om van jouw killerbody een lifestyle te maken? Met', NULL, NULL, NULL, NULL, NULL),
(44, 'Joona Linna 6 - Jager', 'Lars Kepler', '6 Februari 2017', 'Begin maar vast met rennen<br /> Joona Linna is terug!<br /><br /> Na twee jaar te hebben doorgebracht in een van de best beveiligde gevangenissen van Zweden, wordt Joona Linna benaderd voor een geheime opdracht. Saga Bauer heeft hem nodig voor een onderz', NULL, NULL, NULL, NULL, NULL),
(45, 'In het water', 'Paula Hawkins', '31 december 1899', 'De #1 bestsellerauteur van <a href=\"https://www.bol.com/nl/p/het-meisje-in-de-trein/9200000059399470/\">Het meisje in de trein</a> is terug met een verslavende thriller vol psychologische spanning.<br /><br />Nel, een alleenstaande moeder, wordt dood aange', NULL, NULL, NULL, NULL, NULL),
(46, 'Het houden van mannen', 'Myrthe van der Meer', '31 december 1899', '<p> Veel Nederlandse vrouwen hebben een man, of kennen iemand die er een heeft. Voor iedereen die interesse heeft in de man als huisgenoot of er al een heeft en hier meer over wil weten, is er nu Het houden van mannen. Deze compacte en geïllustreerde vel', NULL, NULL, NULL, NULL, NULL),
(47, 'Bikiniproof met Sonja', 'Sonja Bakker', '31 december 1899', 'Zomer! Een bikini of badpak, topje of jurkje aantrekken: niet iedereen voelt zich daar prettig bij. Want nooit zijn overtollige kilo\'s beter zichtbaar dan in dit seizoen. Wil je nog voor de zomer die extra kilo\'s kwijt? Met dit boek zet je de eerste stap', NULL, NULL, NULL, NULL, NULL),
(48, 'Judas', 'Astrid Holleeder', '5 november 2016', 'Een valse hond sluit je op in een hok, of laat je inslapen.’<br /><br />Astrid en Sonja Holleeder besluiten in 2013 te doen wat niemand voor mogelijk hield: ze staan op tegen hun broer Willem – die na zijn vrijlating in 2012 tot nationale knuffelcrimi', NULL, NULL, NULL, NULL, NULL),
(49, 'Koolhydraatarrme Recepten uit Oanh\'s Kitchen', 'Oanh Ha Thi Ngoc', '31 december 1899', 'Wil je op een simpele en leuke manier gezond en koolhydraatarm eten? Dan is dit kookboek iets voor jou! Koolhydraatarme recepten uit Oanh\'s Kitchen is een kookboek waarin een hoop nieuwe en mijn all time favourite recepten zijn gebundeld. Met 192 pagina\'s', NULL, NULL, NULL, NULL, NULL),
(50, 'Singing in the brain', 'Erik Scherder', '31 december 1899', 'Erik Scherder speelt viool. Hij kan er nog niet veel van, maar het oefenen en het bezig zijn met muziek stimuleert zijn hersenen. Hij wordt er fit van – en gelukkig. Muziek, op wat voor manier dan ook beleefd, professioneel of zomaar, passief of actief,', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `gender` enum('0','1','2') DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `phonenumber` int(50) DEFAULT NULL,
  `altnumber` int(50) DEFAULT NULL,
  `rank` enum('0','1','2') NOT NULL DEFAULT '0',
  `street` text NOT NULL,
  `zipcode` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `registerdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `gender`, `birthdate`, `phonenumber`, `altnumber`, `rank`, `street`, `zipcode`, `city`, `country`, `registerdate`) VALUES
(1, 'Nyma', 'nyma@telfort.nl', '$2y$10$ok.QEfWWwLLBjRKF6DV05uzhE6y57IzHwqI0U8E9xxyN73k5s9nSK', NULL, '2017-05-15 02:00:57', NULL, NULL, '0', 'Van Der Hagenstraat 701', '6717DK', 'Ede', 'Nederland', '2017-04-21 07:33:27'),
(2, 'Jurgen', 'jurgenklomp883@gmail.com', '$2y$10$6911AKa3qMcnlr9fUBjHE.DQlbLElDzSH1FQ87dSl6l1HhyU6aLXm', NULL, '2017-05-15 02:00:59', NULL, NULL, '0', 'Flierenhofstraat 57', '6681BX', 'Bemmel', 'Nederland', '2017-05-02 13:05:59');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
