<?php
declare(strict_types=1);

class Livre implements Printable {
    private string $_titre;
    private int $_dateSortie;
    private string $_isbn;
    private string $_resume;

    public function __construct(string $pTitre, int $pDateSortie, string $pIsbn, string $pResume) {
        $this->_titre = $pTitre;
        $this->_dateSortie = $pDateSortie;
        $this->_isbn = $pIsbn;
        $this->_resume = $pResume;
    }

    public function getTitre():string{
        return $this->_titre;
    }

    public function getDateSortie():int {
        return $this->_dateSortie;
    }

    public function getISBN():string{
        return $this->_isbn;
    }

    public function getResume():string {
        return $this->_resume;
    }

    public function print():string {
        return " [".get_class($this)."]titre: ".$this->_titre;
    }
}