<?php


namespace SergiX44\OddcastTTS\Voices\Romanian;


use SergiX44\OddcastTTS\Voices\Voice;

class Ioana implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 30;
    }

    public function getLanguageName(): string
    {
        return 'Romanian';
    }

    public function getName(): string
    {
        return 'Ioana';
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