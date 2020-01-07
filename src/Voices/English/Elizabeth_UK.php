<?php


namespace SergiX44\OddcastTTS\Voices\English;


use SergiX44\OddcastTTS\Voices\Voice;

class Elizabeth_UK implements Voice
{

    public function getID(): int
    {
        return 4;
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
        return 'Elizabeth_UK';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 2;
    }
}