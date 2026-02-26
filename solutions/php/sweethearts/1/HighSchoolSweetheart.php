<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        $x = trim($name);
        return substr($x,0,1);
    }

    public function initial(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        $x = trim($name);
        $x = ucfirst(substr($x,0,1));
        return $x.".";        
    }

    public function initials(string $name): string
    {
        // throw new \BadFunctionCallException("Implement the function");
        $x = trim($name);
        $part = explode(" ",$x);
        return $this->initial($part[0]) . " " . $this->initial($part[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
{
    $initialsA = $this->initials($sweetheart_a);
    $initialsB = $this->initials($sweetheart_b);

    return
"     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$initialsA}  +  {$initialsB}     **
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