<?php
namespace Page;


class CategoryNavigation
{

    // T1400

    public static $lawnTractor = '//a[@href="/lawn-garden-tractors"]';
    public static $waitTractorsPanel = '//div[@class="category-collateral lawn-garden-tractors"]';

    // T1359

    public static $deals = '//a[@href="/sale-begins-now"]';
    public static $shopNow = '.curved.shadow.shop-now';
    public static $bestDeals = 'ul > li:nth-of-type(2) > span > a';
    public static $clearZone = '.floating-ticket>a';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function home()
    {
        $I = $this->tester;
        $I->amOnPage('/');
    }

    public function lawnTractor(){
        $I = $this->tester;
        $I->waitAndClick(self::$lawnTractor);
        $I->waitForElement(self::$waitTractorsPanel);
    }

    public function saleDepartment(){
        $I = $this->tester;
        $I->waitAndClick(self::$deals);
        $I->waitAndClick(self::$shopNow);
        $I->waitForElement(self::$bestDeals);
        $I->waitForText('The Best Deals Around');
        $I->click(self::$bestDeals);
        $I->seeInCurrentUrl('/sale-begins-now');
        $I->waitAndClick(self::$clearZone);
        $I->waitForText('The Clearance Zone');
        $I->see('The Clearance Zone', 'h1');
        $I->seeInCurrentUrl('/sale-begins-now/clearance-zone');
    }

}