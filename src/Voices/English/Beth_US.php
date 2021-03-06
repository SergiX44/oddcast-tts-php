<?php


namespace SergiX44\OddcastTTS\Voices\English;


use SergiX44\OddcastTTS\Voices\Voice;

class Beth_US implements Voice
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
        return 'Beth_US';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 3;
    }
}