<?php


namespace SergiX44\OddcastTTS\Voices\English;


use SergiX44\OddcastTTS\Voices\Voice;

class Hugh_UK implements Voice
{

    public function getID(): int
    {
        return 5;
    }

    public function getLanguageID(): int
    {
        return 1;
    }

    public function getLanguageName(): string
    {
        return 'English';
    }

    public function getName(): string
    {
        return 'Hugh_UK';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 3;
    }
}