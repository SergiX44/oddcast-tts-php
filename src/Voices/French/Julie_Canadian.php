<?php


namespace SergiX44\OddcastTTS\Voices\French;


use SergiX44\OddcastTTS\Voices\Voice;

class Julie_Canadian implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 4;
    }

    public function getLanguageName(): string
    {
        return 'French';
    }

    public function getName(): string
    {
        return 'Julie_Canadian';
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