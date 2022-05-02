<?php

namespace tests\functional;
use FunctionalTester;

class LogInCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Welcome');
    }

    public function aboutPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('About');
        $I->see('About');
    }
}
