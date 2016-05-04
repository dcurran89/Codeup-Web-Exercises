<?php

class Server
{
    public static $adjValue;
    public static $nounValue;
    public static $adjectives;
    public static $nouns;

    public static function serverName($valueOne, $valueTwo)
    {

        $name = $valueOne . " " . $valueTwo;
        return $name;
    }
    public static function getAdj()
    {
        $randomAdj = mt_rand(0, sizeof(self::$adjectives) - 1);
        self::$adjValue = self::$adjectives[$randomAdj];
    }
    public static function getNoun()
    {
        $randomNoun = mt_rand(0, sizeof(self::$nouns) - 1);
        self::$nounValue = self::$nouns[$randomNoun];
    }

    public static function pageController()
    {
        self::$adjectives = ['Garrulous', 'Defamatory', 'Calamitous', 'Heuristic', 'Pernicious', 'Munificent', 'Bellicose', 'Adroit', 'Contumacious', 'Turgid'];
        self::$nouns = ['People', 'Slangwhanger', 'Jackanapes', 'Hootenanny', 'Gaberlunzie', 'Panjandrum', 'Hoosegow', 'Snollygoster', 'Hobbledehoy', 'Fuddy-duddy'];
        
        $data = array();
        self::getAdj();
        self::getNoun();

        $data['message'] = self::serverName(self::$adjValue, self::$nounValue);

        return $data;
    }
}

?>
