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
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f4f4f4;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .category {
            font-weight: bold;
            background-color: #e0e0e0;
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
            <td>Student heeft XAMPP geïnstalleerd...</td>
            <td>Student kan 5 HTML tags...</td>
            <td>Student kan een database maken...</td>
            <td>Student kan een ERD en technisch ontwerp maken...</td>
            <td>Student presenteert software in tweede taal...</td>
            <td>Student legt geleerde code uit...</td>
            <td>Student toont challenges en verbeteringen aan...</td>
        </tr>
        <!-- Rij 2: Werken in een ontwikkelteam -->
        <tr class="category">
            <td colspan="8">2: Werken in een ontwikkelteam</td>
        </tr>
        <tr>
            <td>Nog geen level</td>
            <td>Project uitgevoerd in een groep...</td>
            <td>Kan samenwerken en presenteren...</td>
            <td>Reflecteert op eigen rol via Belbin test...</td>
            <td>Geeft feedback aan teamleden...</td>
            <td>Reflecteert volgens STARR-methode...</td>
            <td>Voert 360-graden feedback uit...</td>
            <td>Reflecteert op eigen rol in team...</td>
        </tr>
        <!-- Rij 3: Generieke onderdelen RE -->
        <tr class="category">
            <td colspan="8">3: Generieke onderdelen RE</td>
        </tr>
        <tr>
            <td>Rekenlicentie aangeschaft & H1-6</td>
            <td>H7-13</td>
            <td>H14-18</td>
            <td colspan="5"></td>
        </tr>
        <!-- Rij 4: Generieke onderdelen BS -->
        <tr class="category">
            <td colspan="8">4: Generieke onderdelen BS</td>
        </tr>
        <tr>
            <td>...</td>
            <td>Beloning: '*'</td>
            <td>Verdiept in sociaal-maatschappelijk...</td>
            <td>Verdiept in gezondheid...</td>
            <td>Verdiept in politiek...</td>
            <td>Verdiept in economie...</td>
            <td>Interview stagebegeleider...</td>
            <td>Neemt burgerschapsdimensies op...</td>
        </tr>
        <!-- Rij 5: Generieken onderdelen NE -->
        <tr class="category">
            <td colspan="8">5: Generieke onderdelen NE </td>
            <tr>
           
            <td></td>
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
            <td>
            A2-schrijf- en gesprekopdrachten richten zich op het schrijven van eenvoudige notities en brieven en het voeren van korte, alledaagse gesprekken over vertrouwde onderwerpen.</td>
            <td>
            Opdrachten voor A2 vocabulair en spreken ERK niveau spreken: Ik kan een reeks uitdrukkingen en zinnen gebruiken om in eenvoudige bewoordingen mijn familie en andere mensen, leefomstandigheden, mijn opleiding en mijn huidige of meest recente baan te beschrijven.</td>
            <td>Opdrachten voor B1 lezen en luisteren ERK niveau lezen: Ik kan teksten begrijpen die hoofdzakelijk bestaan uit hoogfrequente, alledaagse of aan mijn werk gerelateerde taal. Ik kan de beschrijving van gebeurtenissen, gevoelens en wensen in persoonlijke brieven begrijpen. ERK niveau luisteren: Ik kan de hoofdpunten begrijpen wanneer in duidelijk uitgesproken standaarddialect wordt gesproken over vertrouwde zaken die ik regelmatig tegenkom op mijn werk, school, vrije tijd enz. Ik kan de hoofdpunten van veel radio- of tvprogramma’s over actuele zaken of over onderwerpen van persoonlijk of beroepsmatig belang begrijpen, wanneer er betrekkelijk langzaam en duidelijk gesproken wordt.<td>
            <td>...</td>
            <td>Opdrachten voor B1 vocabulair en spreken Examen spreken, gesprek voeren, schrijven ERK niveau spreken: Ik kan uitingen op een simpele manier aan elkaar verbinden, zodat ik ervaringen en gebeurtenissen, mijn dromen, verwachtingen en ambities kan beschrijven. Ik kan in het kort redenen en verklaringen geven voor mijn meningen en plannen. Ik kan een verhaal vertellen, of de plot van een boek of film weergeven en mijn reacties beschrijven.</td>

             <!-- Rij 7: Generieken onderdelen LB -->
        <tr class="category">
            <td colspan="8">7: Generieke onderdelen LB </td>
            <tr>
            <td>...</td>
            <td>Maak een profiel aan bij Leo Loopbaan. Doe de test "jouw plek in de wereld van werk" Reflecteer hierop. Maak de loopbaanopdracht belemmering of kans in Leo Loopbaan. En reflecteer.</td>
            <td>Maak in Leo Loopbaan de tests 'Persoonlijkheidstype', 'Kwaliteitentest' en 'Beroepenzelfonderzoek' schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde.</td>
            <td>Maak in Leo Loopbaan de tests 'Waardentest', 'Competentiescan' en 'Employebility' schrijf een reflectie over de uitkomsten, je kunt uitleg geven over de uitkomsten wat je over jezelf leerde.</td>
            <td>
            Maak een LinkedIn profiel aan, je kunt hierover uitleggen wat belangrijk is. Maak een CV.<td>
            <td>...</td>
            <td>...<td>
    </tbody>
</table>

</body>
</html>
