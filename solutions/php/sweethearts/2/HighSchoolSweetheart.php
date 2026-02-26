<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $x = $name;
        return trim($x)[0];
    }

    public function initial(string $name): string
    {
        return ucfirst($this->firstLetter($name)).".";
    }

    public function initials(string $name): string
    {
        $x = trim($name);
        $part = explode(" ",$x);
        return $this->initial($part[0]) . " " . $this->initial($part[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
{
    $a = $this->initials($sweetheart_a);
    $b = $this->initials($sweetheart_b);
    return
"     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$a}  +  {$b}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *";    
}

}
$sweetheart = new HighSchoolSweetheart();
$sweetheart->firstLetter(" Jane ");
$sweetheart->initial(" jane ");
$sweetheart->initials("Jane Doe");
echo $sweetheart->pair('Avery Bryant', 'Charlie Dixon');