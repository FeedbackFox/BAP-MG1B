<?php
$naam;
$leeftijd;
$klas;
switch ($_POST["naam"]) {
    case "Timo":
        $naam = "Hallo Timo. Php aan het schrijven, zie ik?";
        break;
    case "Cheyenne":
        $naam = "Hey sjenna, kijk nou toch eens verdorie naar je computer!";
        break;
    case "Mickey":
        $naam = "Hallo Mickey, dit is een php opdracht.";
        break;
    case "Joey":
        $naam = "Hallo Joey, de discord gaat nogsteeds lekker.";
        break;
    case "Jelle":
        $naam = "Jij bent heel sexy, Jelle.";
        break;
    default:
        $naam = "Hallo, jij heet " . $_POST["naam"] . ".";
}
switch ($_POST["leeftijd"]) {
    case 100:
        $leeftijd = "Wow, jij bent echt oud, zeg!";
        break;
    case 18:
        $leeftijd = "Je mag nu alcohol drinken en rijden. Hopelijk doe je ze alleen niet tegelijkertijd!";
        break;
    case 69:
        $leeftijd = "Heh. Die leeftijd.";
        break;
    case 1:
        $leeftijd = "Googoo gaga.";
        break;
    default:
        $leeftijd = "Je bent " . $_POST["leeftijd"] . " jaar oud.";
}
switch ($_POST["klas"])
{
    case "Choose":
        $klas = "Je moet jouw klas invullen.";
        break;
    case "MG1A":
        $klas = "Je zit in MG1A? Eh, dat is wel A-lright.";
        break;
    case "MG1B":
        $klas = "Hey, je zit bij mij in de klas!";
        break;
    case "MG1C":
        $klas = "MG1C, huh? Dat is best wel C-ool.";
        break;
    case "MG1D":
        $klas = "MG1D is best wel D-ank.";
        break;
    default:
}
echo $naam . "<br>" . $leeftijd . "<br>" . $klas;