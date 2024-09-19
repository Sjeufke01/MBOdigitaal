<!DOCTYPE html>
<html lang="nl">

<head>
    <?php require '../views/templates/head.php' ?>
</head>

<body>
    <?php require '../views/templates/menu.php' ?>
</body>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leerdoelen Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f8f8;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .category {
            font-weight: bold;
            background-color: #e0e0e0;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<h2>Leerdoelen Overzicht</h2>

<table>
    <thead>
        <tr>
            <th>Niveau</th>
            <th>Level 1</th>
            <th>Level 2</th>
            <th>Level 3</th>
            <th>Level 4</th>
            <th>Level 5</th>
            <th>Level 6</th>
            <th>Level 7</th>
        </tr>
    </thead>
    <tbody>
        <!-- Rij 1: Realiseert Software -->
        <tr class="category">
            <td colspan="8">1: Realiseert Software</td>
        </tr>
        <tr>
            <td>Nog geen level</td>
            <td>Student heeft XAMMP/alternatief werkend geïnstaleerd. Op dit platform wordt een werkend product is gepresenteerd.
Code wordt gepreseteerd met VS Code.
Kan 3 HTML tags & 2 CSS opdrachten uitleggen.</td>

            <td>Student kan 5 HTML tags.
5 CSS onderwerpen: benoem 3 tags, leg uit hoe nesting werkt.
Leg een zelfgemaakte Javascript functie uit die gebruik maakt van parameters.</td>

            <td>Student kan een database maken met gebruikersrechten. Is in staat om nette code te schrijven met een combinatie van JavaScript,HTML,CSS & PHP zoals behandeld in workshops.//comments en structuur</td>

            <td>Student kan een ERD, Functioneel/Technisch ontwerp, MOSCOW en Usecases maken.
Kan de 4 basisprincipes van OOP uitleggen iclusief een eenvoudeige toepassing.</td>

            <td>Student presenteert zelfgemaakte software in een tweede programmeertaal en kan dit uitleggen. Kan een gebruikte debug strategie uitleggen.</td>

            <td>Student heeft tweede programmeertaal gekozen. Legt de geleerde code uit van een verdiepende challenge. </td>

            <td>Student laat in minimaal 2 afgeronde challenges waarvan 1 met een bedrijf het volgende zien: 
- Opdracht definitie, planning en bewaking
-Ontwerpdocument volledig uit padlet ingevuld
-Kan software uitleggen
-Tesplan, Testlog en Tesverslag volledig ingevuld
-Verbetervoorstellen geven adhv begindefinitie</td>
        </tr>
        <!-- Rij 2: Werken in een ontwikkelteam -->
        <tr class="category">
            <td colspan="8">2: Werken in een ontwikkelteam</td>
        </tr>
        <tr>
            <td>Nog geen level</td>
            <td>Student voert een project uit  in een groep en lost eventuele conflicten aantoonbaar op.</td>
            <td>Student kan samenwerken in een groepje en weet wat hun rol hierin is. Laat zien dat hij een presentatie kan geven.</td>
            <td>Student reflecteert op eigen rol binnen het team via Belbin test.Laat zien dat hij een presentatie kan geven rekening houdend met zijn/haar doelgroep.</td>
            <td>Student reflecteert op eigen rol binnen het team en toont aan dat ze feedback kunnen geven aan teamleden.  Student plant werkzaamheden eb deze zijn aantoonbaaar adhv een stand up meetingsverslag en een planning.</td>
            <td>Student reflecteert volgens de STARR- methode op eigen rol binnen het team. Student toont aan dat hij/zij feedback kan geven aan teamleden. </td>
            <td>Student heeft een 360-graden feedback uitgevoerd en reflecteert hierop. Student presenteerd zijn challenge op een professionele manier.</td>
            <td>Student heeft actief deelgenemonen aan een team met een duidelijke rol en vastgelegde afspraken. Presenteerd op een proffesionele manier een product. Student reflecteert op eigen productdeel, eigen rol, teamverband en gedrag. Bv. STARR</td>
        </tr>
        <!-- Rij 3: Generieke onderdelen RE -->
        <tr class="category">
            <td colspan="8">3: Generieke onderdelen RE</td>
        </tr>
        <tr>
            <td>Nog geen level</td>
            <td>Rekenlicentie aangeschaft & H1-6</td>
            <td>H7-13</td>
            <td>H14-18</td>
            <td></td>
            <td></td>
            <td></td>

            <td colspan="5"></td>
        </tr>
        <!-- Rij 4: Generieke onderdelen BS -->
        <tr class="category">
            <td colspan="8">4: Generieke onderdelen BS</td>
        </tr>
        <tr>
            <td>nog geen level</td>
            <td>Beloning: '*'</td>
            <td>Heeft zich verdiept in de dimensie Sociaal Maatschappelijk, heeft een mening over normen en waarden en verschillen tusssen individuen en heeft dit aangetoond in een infographic</td>
            <td>Heeft zich verdiept in de dimensie gezondheid, heeft een mening over beroepsziekten en het belang van gezondheid in het algemeen en heeft dit aangetoond in een infographic.</td>
            <td>Heeft zich verdiept in de dimensie politiek, heeft een mening over diverse politieke stromingen, heeft kennis van het Nederlandse kiessysteen, 1e en 2e kamer en trias politica en heeft dit aangetoond in een infographi</td>
            <td>Heeft zich verdiept in de dimensie economie, heeft zich verdiept in de kosten die een student in Nederland heeft, welke verzekeringen verplicht zijn na de leeftijd van 18 jaar en heeft kennis van belastingen in Nederland en heeft dit aangetoond in een infographic</td>
            <td>Interview bij de stagebegeleider van het BPV bedrijf over hoe de vier dimensies een plek krijgen in de organisatie en geeft een advies voor verbetering op basis van het interview.</td>
            <td>Neemt de burgerschapsdimensies op in uitwerking van de challenges. Doet voorstel voor acties challenge owner</td>
        </tr>
        <!-- Rij 5: Generieken onderdelen NE -->
        <tr class="category">
            <td colspan="8">5: Generieke onderdelen NE </td>
            <tr>
           
            <td>Nog geen level</td>
            <td>Student heeft 3 verschillende Nederlands-Bricks succesvol voltooid.</td>
            <td>...</td>
            <td>...</td>
            <td>Student heeft een presentatie-opdracht op 3F-niveau voltooid.</td>
            <td>Student heeft een schrijfopdracht op 3F-niveau voltooid.</td>
            <td>Student heeft een examen Lezen/Luisteren op 3F-niveau voltooid.</td>
            <td>Student heeft alle examens voor Nederlands behaald.</td>
        </tr>
        <!-- Rij 6: Generieken onderdelen EN -->
        <tr class="category">
            <td colspan="8">6: Generieke onderdelen EN </td>
            <tr>
            <td>Beloning '*'</td>
            <td>A2-lees- en luisteropdrachten richten zich op het begrijpen van eenvoudige teksten en veelvoorkomende woorden over persoonlijke onderwerpen en duidelijke boodschappen.</td>
            <td> A2-schrijf- en gesprekopdrachten richten zich op het schrijven van eenvoudige notities en brieven en het voeren van korte, alledaagse gesprekken over vertrouwde onderwerpen.</td>
            <td> Opdrachten voor A2 vocabulair en spreken ERK niveau spreken: Ik kan een reeks uitdrukkingen en zinnen gebruiken om in eenvoudige bewoordingen mijn familie en andere mensen, leefomstandigheden, mijn opleiding en mijn huidige of meest recente baan te beschrijven.</td>
            <td>Opdrachten voor B1 lezen en luisteren ERK niveau lezen: Ik kan teksten begrijpen die hoofdzakelijk bestaan uit hoogfrequente, alledaagse of aan mijn werk gerelateerde taal. Ik kan de beschrijving van gebeurtenissen, gevoelens en wensen in persoonlijke brieven begrijpen. ERK niveau luisteren: Ik kan de hoofdpunten begrijpen wanneer in duidelijk uitgesproken standaarddialect wordt gesproken over vertrouwde zaken die ik regelmatig tegenkom op mijn werk, school, vrije tijd enz. Ik kan de hoofdpunten van veel radio- of tvprogramma’s over actuele zaken of over onderwerpen van persoonlijk of beroepsmatig belang begrijpen, wanneer er betrekkelijk langzaam en duidelijk gesproken wordt.<td>
            <td></td>
            <td>Opdrachten voor B1 vocabulair en spreken Examen spreken, gesprek voeren, schrijven ERK niveau spreken: Ik kan uitingen op een simpele manier aan elkaar verbinden, zodat ik ervaringen en gebeurtenissen, mijn dromen, verwachtingen en ambities kan beschrijven. Ik kan in het kort redenen en verklaringen geven voor mijn meningen en plannen. Ik kan een verhaal vertellen, of de plot van een boek of film weergeven en mijn reacties beschrijven.</td>

             <!-- Rij 7: Generieken onderdelen LB -->
        <tr class="category">
            <td colspan="8">7: Generieke onderdelen LB </td>
            <tr>
            <td>Nog geen level</td>
            <td>...</td>
            <td>Maak een profiel aan bij Leo Loopbaan. Doe de test "jouw plek in de wereld van werk" Reflecteer hierop. Maak de loopbaanopdracht belemmering of kans in Leo Loopbaan. En reflecteer.</td>
            <td>Maak in Leo Loopbaan de tests 'Persoonlijkheidstype', 'Kwaliteitentest' en 'Beroepenzelfonderzoek' schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde.</td>
            <td>Maak in Leo Loopbaan de tests 'Waardentest', 'Competentiescan' en 'Employebility' schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde.</td>
            <td>
            Maak een LinkedIn profiel aan, je kunt hierover uitleggen wat belangrijk is. Maak een CV.<td>
            <td>...</td>

            
             <!-- Rij 8: Keuzedeel 1-->
        <tr class="category">
            <td colspan="8">8: Keuzedeel 1</td>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>examens gehaald</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            <!-- Rij 9: Keuzedeel 2-->
        <tr class="category">
            <td colspan="8">9: Keuzedeel 2</td>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>examens gehaald</td>
            <td></td>
            <td></td>
            
            <!-- Rij 10: Keuzedeel 3-->
        <tr class="category">
            <td colspan="8">10: Keuzedeel 3</td>
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>examens gehaald</td>
    </tbody>
</table>

</body>
</html>
