<?php

/*
Zmiana sposobu przeprowadzania wyszukiwania:
i - wyszukuje bez rozróżniania wielkości liter
m - wyszukiwanie wielowierszowe (wyszukuje początek lub koniec ciągu
będą pasować do początku lub końca wiersza)
u - poprawne dopasowanie wzorców zakodowanych w UTF-8
*/

/*
[abc] - znajdź znak z opcji w nawiasach
[^abc] - znajdź dowolny znak NIE z nawiasów
[0-9] - znajdź jeden znak z zakresu 0 do 9
*/

/*
Metaznaki - znaki o specjalnym znaczeniu:
| - znajdź dopasowanie dla dowolnego wzorca oddzielonego znakiem | jak w :
kot|pies|ryba
. - znajdź tylko jedną instancję dowolnej postaci
^ - znajduje dopasowanie jako początek ciągu, jak w: ^Hello
$ - Znajduje dopasowanie na końcu ciągu, jak w World$
\d - znajdź cyfrę
\s - znajdź znak odstępu
\b - Znajdź dopasowanie na początku takiego słowa: \bWORD lub
      na końcu takiego słowa: WORD\b
\uxxxx - znajdź znak Unicode określony przez liczbę szesnastkową
*/

/*
Kwantyfikatory definiją ilość:
n+ - dopasowuje dowolny ciąg, który zawiera co najmniej jedno n
n* - dopasowuje dowolny ciąg, który zawiera zero lub więcej wystąpień n
n? - dopasowuje dowolny ciąg, który zawiera zero lub jedno wystąpienie n
n{x} - dopasowuje dowolny ciąg zawierający ciąg X n
n{x,y} - dopasowuje dowolny ciąg, który zawiera sekwencję od X do Y
n{x,} - dopasowuje dowolny ciąg, który zawiera sekwencję od X do Y n
*/

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);

?>
