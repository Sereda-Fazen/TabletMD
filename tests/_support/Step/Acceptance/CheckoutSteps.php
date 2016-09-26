<?php
namespace Step\Acceptance;

use Exception;

class CheckoutSteps extends \AcceptanceTester
{
    public function addToBasket(){
        $I = $this;
        $I->waitForElement('//div[@class="category-products"]');
        $I->waitForElement('//*[@class="product-shop"]//button[text()="Add to Basket"]');
        $I->click('//*[@class="product-shop"]//button[text()="Add to Basket"]');
        $I->waitForElement('.success-msg');
        $I->see('was added to your shopping cart.','.success-msg');

    }
    
    /**
     * Tractor
     */

    public function addToBasketTractor()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//a[@href="/lawn-garden-tractors"]');
        $I->moveMouseOver('//a[@href="/lawn-garden-tractors"]');
        $I->waitForElementVisible('//div[@class="category"]//ul//a');
        $I->click('//div[@class="category"]//ul//a');
        self::addToBasket();
    }

    /**
     * Mower
     */


    public function addToBasketMower(){
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//a[@href="/lawn-mowers/"]');
        $I->moveMouseOver('//a[@href="/lawn-mowers/"]');
        $I->waitForElementVisible('//*[@class="category wide"]//li[5]/a');
        $I->click('//*[@class="category wide"]//li[5]/a');
        self::addToBasket();

    }

    public function optional()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//a[@href="/lawn-garden-tractors"]');
        $I->moveMouseOver('//a[@href="/lawn-garden-tractors"]');
        $I->waitForElementVisible('//a[@href="/lawn-garden-tractors/zero-turn-ride-on-mowers"]');
        $I->click('//a[@href="/lawn-garden-tractors/zero-turn-ride-on-mowers"]');

        $I->waitForElement('//*[@class="products-list"]//li//a/img');
        $I->click('//*[@class="products-list"]//li//a/img');
        try {
        $I->waitForElement('.product-options',5);


            $optional = count($I->grabMultiple('//*[@class="product-options"]//ul/li'));

            for ($o = 1; $o <= $optional; $o++) {
                $I->click('//*[@class="product-options"]//ul/li[' . $o . ']/input');
                $I->waitForElement('//*[@class="checkbox  product-custom-option2523 change-container-classname validation-passed"]');
            }
        } catch (Exception $e) {
            $I->dontSeeElement('//*[@class="product-options"]//ul');
        }

        $I->waitForElement('.add-to-cart-buttons');
        $I->click('.add-to-cart-buttons');
        $I->see('was added to your shopping cart.', '.success-msg');
        $I->waitForElement('//dl[@class="item-options"]/dt[text()="Optional Accessories:"]');
        $I->moveMouseOver('//dl[@class="item-options"]/dd');
        $I->waitForElementVisible('//dl[@class="item-options"]//dl/dd');


    }


    public function purchaseOtherItem()
    {
        $I = $this;
        $I->waitForElement('//a[@href="/brushcutters-strimmers-line-trimmers"]');
        $I->moveMouseOver('//a[@href="/brushcutters-strimmers-line-trimmers"]');
        $I->waitForElementVisible('//li[@class="item4 active"]/nav/div[4]//ul//a');
        $I->click('//li[@class="item4 active"]/nav/div[4]//ul//a');
        $I->waitForElement('//div[@class="md-product-essential-main"]');
        $I->waitForElement('.add-to-cart-buttons');
        $I->click('.add-to-cart-buttons');
        $I->waitForElement('.success-msg');
        $I->see('was added to your shopping cart.','.success-msg');
        $I->waitForElement('tr.last.even');

    }





    /**
     * Brand
     */

    public function selectBrand()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//nav[@class="product-navigation"]/ul/li//a[contains(text(),"Brands")]');
        $I->moveMouseOver('//nav[@class="product-navigation"]/ul/li//a[contains(text(),"Brands")]');
        $I->waitForElement('.brand-lists >div');

    }
    public function flymo(){
        $I = $this;
        $I->waitForElementVisible('//a[@href="/flymo"]');
        $I->click('//a[@href="/flymo"]');
        $I->waitForText('Flymo');
    }

    public function selectTwoBrands()
    {
        $I = $this;
        self::selectBrand();
        self::flymo();
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Flymo Grass Trimmers"]');
        $I->click('//div[@class="subcat_container"]/h3[text()="Flymo Grass Trimmers"]/..//div');
        self::addToBasket();

        self::selectBrand();
        self::flymo();
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Flymo Vacs & Blowers"]');
        $I->click('//*[@class="category-collateral"]/div[6]/div');
        self::addToBasket();
        $I->waitForElement('tr.last.even');
        $I->fillField('//tr[@class="last even"]//*[@class="input-text qty"]','2');
        $I->click('tr.last.even button');
        $I->waitForElement('//tr[@class="last even"]/td[@class="product-cart-actions"]/input', '2');

    }

    /**
     * 	Purchase Multiple Number of Products
     */
    public function multipleNumberProducts ()
    {
        $I = $this;

        self::selectBrand();

        $I->waitForElementVisible('//a[@href="/tanaka"]');
        $I->click('//a[@href="/tanaka"]');
        $I->waitForText('Tanaka');
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Tanaka Hedgetrimmers"]');
        $I->click('//*[@class="category-collateral"]/div/div');

        self::addToBasket();

        self::selectBrand();

        $I->waitForElementVisible('//a[@href="/viking"]');
        $I->click('//a[@href="/viking"]');
        $I->waitForText('Viking');
        $I->waitForElement('//div[@class="subcat_container"]/h3[text()="Viking Garden Shredders"]');
        $I->click('//*[@class="category-collateral"]/div/div');

        self::addToBasket();

        $I->waitForElement('tr.last.even');
        $I->fillField('//tr[@class="last even"]//*[@class="input-text qty"]','3');
        $I->click('tr.last.even button');
        $I->waitForElement('//tr[@class="last even"]/td[@class="product-cart-actions"]/input', '3');


    }
    





}