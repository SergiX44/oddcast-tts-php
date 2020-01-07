<?php


namespace SergiX44\OddcastTTS\Voices\Danish;


use SergiX44\OddcastTTS\Voices\Voice;

class Magnus implements Voice
{

    public function getID(): int
    {
        return 2;
    }

    public function getLanguageID(): int
    {
        return 19;
    }

    public function getLanguageName(): string
    {
        return 'Danish';
    }

    public function getName(): string
    {
        return 'Magnus';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 2;
    }
}