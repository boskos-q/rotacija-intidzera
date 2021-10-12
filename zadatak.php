<?php
/* 
 * U inputu se prosledjuje 32bitni intidzer x. Vratiti obrnut intidzer x. Ako se rotacijom intidzera x prelazi vrednost 32bitnog intidzera, vratiti 0.
 * Zadatak mozete testirati pokretanjem ovog fajla preko komandne linije `php zadatak.php`
 *
 * 
 * Primer 1: x = 123
 * Rezultat: 321
 * 
 * Primer 2: x = -123
 * RezultatL -321
 * 
 * Primer 3: x = 120
 * Rezultat: 21
 * 
 * Primer 4: x = 0
 * Rezultat: 0
 * 
 * 
*/

class Resenje {

    /**
     * @param int $x
     * @return int
     */
    public static function obrnuti(int $x)
    {
        // Ispod napisati resenje i vratiti novu vrednost
        // Navedeni kod je samo placeholder pa ga slobodno mozete izmeniti
        $result = 0;
        return $result;
    }
}


/**
 * 
 * Navedeni kod ispod je namenjen za testiranje. Ne menjati ga.
 * 
 * 
 * @param int $inputVal
 * @param int $expectedVal
 * 
 * @return void
 */
function test(int $inputVal, int $expectedVal)
{
    if ($inputVal === $expectedVal) {
        echo $expectedVal . ' PASS'.PHP_EOL;
    } else {
        echo $expectedVal . ' FAIL. Got '. $inputVal.PHP_EOL;
    }
}
test(Resenje::obrnuti(123), 321);
test(Resenje::obrnuti(-123), -321);
test(Resenje::obrnuti(120), 21);
test(Resenje::obrnuti(0), 0);
test(Resenje::obrnuti(1534236469), 0);