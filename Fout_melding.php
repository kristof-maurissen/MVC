<?php
//foutafhandeling.php


class NegatieveStortingException extends Exception {
    
}

class RekeningVolException extends Exception {
    
}

class Rekening {
    private $saldo;
    
    public function __construct(){
        $this->saldo = 0;
    }

    public function storten($bedrag){
        if ($bedrag< 0){
            throw new NegatieveStortingException();
        }
        if ($this->Saldo + $bedrag > 1000){
            throw new RekeningVolException();
        }
        $this->saldo+=$bedrag;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fouten afhandelen</title>
    </head>
    <body>
        <?php
        $rek = new Rekening();
        try {
            print("<p>Saldo: " . $rek->getSaldo() . " &euro;</p>");
            $rek->storten(200);
            $rek->storten(600);
            $rek->storten(300);
            print("<p>Saldo: " . $rek->getSaldo() . " &euro;</p>");
        } catch (NegatieveStortingException $ex) {
            print("<p>Een negatief bedrag storten is niet mogelijk!</p>");
            print("<p>Saldo:" . $rek->getSaldo() . " &euro;</p>");
        } catch (RekeningVolException $ex) {
            print("<p>Dit bedrag kan niet gestort worden, de limiet van de rekening is 100 &euro;!</p>");
            print("<p>Saldo: " . $rek->getSaldo() . " &euro;</p>");
        }
        ?>
    </body>    
</html>

