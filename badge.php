<?php

class Badge
{


    private array $people = [
        'Alice' => 0xa5fa3b7f,
        'Bob' => 0xe35c2742,
        'Carol' => 0xbec5ca0f,
        'Dan' => 0x87e35d46,
        'Eve' => 0x5acd14f9,
        'Trevor' => 0xabde1fcf,
    ];
    private $badgeNumber;

    public function __construct($badgeNumber)
    {
        $this->badgeNumber = (int) $badgeNumber;
    }

    function getPerson(int $person)
    {
        $key = ($person ^ $this->badgeNumber);
        $number = str_pad($person, 10, '0');
        $number = str_split($number);
        $lastNumber = array_pop($number);
        array_unshift($number, $lastNumber);

        return implode('', $number);
    }

    function listPhoneNumbers() {
        $people = [];
        foreach ($this->people as $person => $number) {
            $people[$person] = $this->getPerson($number);
        }

        return $people;
    }
}