<?php

class FirstCest
{
    public function aboutPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('About');
        $I->see('About');
    }

    public function frontPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Welcome');
    }
}
