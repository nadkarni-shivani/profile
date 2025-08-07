<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string {
        $cleaned = trim($name);
        return $cleaned[0];
    }

    public function initial(string $name): string {
        $letter = strtoupper($this->firstLetter($name));
        return $letter . '.';
    }

    public function initials(string $fullName): string {
        $parts = explode(' ', trim($fullName));
        return $this->initial($parts[0]) . ' ' . $this->initial($parts[1]);
    }

    public function pair(string $name1, string $name2): string
    {
        $sweethearts = "**     " . $this->initials($name1) . "  +  " . $this->initials($name2) . "     **";
        
        return <<<EOT
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
{$sweethearts}
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
EOT;
    }
}
