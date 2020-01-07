<?php


namespace SergiX44\OddcastTTS\Voices\Chinese;


use SergiX44\OddcastTTS\Voices\Voice;

class Chan_HK_Cantonese implements Voice
{

    public function getID(): int
    {
        return 4;
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
        return 'Chan_HK_Cantonese';
    }

    public function getGender(): string
    {
        return 'M';
    }

    public function getEngine(): int
    {
        return 7;
    }
}