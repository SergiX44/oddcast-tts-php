<?php


namespace SergiX44\OddcastTTS\Voices\English;


use SergiX44\OddcastTTS\Voices\Voice;

class Moira_Irish implements Voice
{

    public function getID(): int
    {
        return 8;
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
        return 'Moira_Irish';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 4;
    }
}