<?php

class SecondCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function HomeCheck(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Welcome');
//        $I->click('About');
//        $I->see('About');
    }
}
