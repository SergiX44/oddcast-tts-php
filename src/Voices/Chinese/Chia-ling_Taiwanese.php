<?php


namespace SergiX44\OddcastTTS\Voices\Chinese;


use SergiX44\OddcastTTS\Voices\Voice;

class Chia-ling_Taiwanese implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 10;
    }

    public function getLanguageName(): string
    {
        return 'Chinese';
    }

    public function getName(): string
    {
        return 'Chia-ling_Taiwanese';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 7;
    }
}