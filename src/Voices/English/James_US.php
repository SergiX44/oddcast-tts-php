<?php


namespace SergiX44\OddcastTTS\Voices\English;


use SergiX44\OddcastTTS\Voices\Voice;

class James_US implements Voice
{

    public function getID(): int
    {
        return 7;
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
        return 'James_US';
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