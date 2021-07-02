<?php
// class Animal
// {
//     public function fly()
//     {
//     }
// }

// class Dog extends Animal
// {
//     public function fly()
//     {
//         if (! $this->hasWings) {
//             throw new Exception;
//         }
//     }
// }

class Animal
{
    private $hasWings;

    public function fly()
    {
        if (!$this->hasWings)
        {
            throw new Exception;
        }
    }
}

class Dog extends Animal
{
}
