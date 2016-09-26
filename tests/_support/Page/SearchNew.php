<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 21.09.16
 * Time: 12:10
 */

namespace Page;
use Exception;


class SearchNew
{

    public static $URL = '/';
    public static $search = '#search';
    public static $clickSearch = '//button[@class="button search-button"]';
    public static $wait = '//div[@class="std"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }



    public function search()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);

    }

    public function searchInvalid($search)
    {
        $I = $this->tester;
        $I->fillField(self::$search, $search);
        $I->click(self::$clickSearch);
        $I->waitForElement(self::$wait);
    }


    ///////////////////////////////////////////////////////////////////////////

// Misspelling
    public static $searchField = '//*[@id="search"]';
    public static $searchField2 = '//*[@id="gsc-i-id1"]';
    public static $searchButton = '//*[@id="search_mini_form"]/div[1]/button';
    public static $searchButton2 = '//*[@id="___gcse_0"]/div/div/form/table[1]/tbody/tr/td[2]/input';
    public static $searchResultLink = '//i[contains(text(),"chainsaws")]';
    public static $searchResultMisspellingLink = '//i[contains(text(),"chinsaws")]';
    public static $noResult = '//*[@class="gsc-wrapper"]/div[2]/div/div/div[1]/div/div';


    public static $searchMisspellingResult = '//*[@class="gsc-results gsc-webResult"]/div[2]//a[contains(@href,"/chainsaws")]';
    public static $searchInvalidMisspellingResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/chainsaws/")]';
    public static $misspellingBlock = '//*[@class="gs-result"]';

    public function searchMisspelling($searchMisspelling,$searchData)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchMisspelling);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$misspellingBlock);
     //   $I->see($searchData,self::$mispellingBlock);
     //   $I->see($searchMisspelling,self::$mispellingBlock);
        $I->see($searchData,self::$searchResultLink);
        $I->see($searchMisspelling,self::$searchResultMisspellingLink);
        $I->waitForElement(self::$searchMisspellingResult);
        return $this;
    }


    public static $search1Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers")]';
    public static $search1InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers/")]';
    public static $search2Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/blog/2012/05/24/three-top-mowers-with-electric-start/")]';
    public static $search3Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-garden-tractors")]';
    public static $search3InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-garden-tractors/")]';
    public static $search4Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-care/aerators-and-scarifiers")]';
    public static $search4InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-care/aerators-and-scarifiers/")]';
    public static $search5Result = '//a[contains(@href,"/mountfield-1530m-lawn-tractor.html")]';
    public static $search6Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/gm/firewood-tools/log-splitters")]';
    public static $search6InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/gm/firewood-tools/log-splitters/")]';
    public static $search7Result = '//a[contains(@href,"/lawnflite-mini-rider-60rde-ride-on-mower.html")]';
    public static $search8Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/mountfield-lawnmowers")]';
    public static $search8InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/mountfield-lawnmowers/")]';
    public static $search9Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/honda-lawnmowers")]';
    public static $search9InvalidResult = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawnmowers/honda-lawnmowers/")]';
    public static $search10Result = '//*[@class="gsc-results gsc-webResult"]/div[1]//a[contains(@href,"/lawn-mowers/petrol-lawnmowers/petrol-four-wheel-rotary-lawn-mowers/self-propelled-4-wheel-petrol-lawn-mowers/einhell-self-propelled-lawn-mowers")]';



    public function searchDifferentTerms($searchData1,$searchData2,$searchData3,$searchData4,$searchData5,$searchData6,$searchData7,$searchData8,$searchData9,$searchData10)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
        $I->fillField(self::$searchField,$searchData2);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search2Result);
        $I->fillField(self::$searchField,$searchData3);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search3Result);
        $I->waitForElementNotVisible(self::$search3InvalidResult);
        $I->fillField(self::$searchField,$searchData4);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search4Result);
        $I->waitForElementNotVisible(self::$search4InvalidResult);
        $I->fillField(self::$searchField,$searchData5);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search5Result);
        $I->fillField(self::$searchField,$searchData6);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search6Result);
        $I->waitForElementNotVisible(self::$search6InvalidResult);
        $I->fillField(self::$searchField,$searchData7);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search7Result);
        $I->fillField(self::$searchField,$searchData8);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search8Result);
        $I->waitForElementNotVisible(self::$search8InvalidResult);
        $I->fillField(self::$searchField,$searchData9);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search9Result);
        $I->waitForElementNotVisible(self::$search9InvalidResult);
        $I->fillField(self::$searchField,$searchData10);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search10Result);
    }


    public function searchWithAPlural ($searchData1,$searchData2){
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
        $I->fillField(self::$searchField,$searchData2);
        $I->click(self::$searchButton);
        $I->waitForElementVisible(self::$search1Result);
        $I->waitForElementNotVisible(self::$search1InvalidResult);
    }

    public static $resultInfo = '//*[@id="resInfo-0"]';

    public function searchLegalTermReturnFewResults ($searchData1,$results)
    {
        $I= $this ->tester;
        $I->fillField(self::$searchField,$searchData1);
        $I->click(self::$searchButton);
        $I->waitForElement(self::$resultInfo);
        $I->see($results, self::$resultInfo);


    }

/////////
// Best Selling Product One: Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)
//Main Page                                 //*[@class="item1"]/a[contains(text(),"Lawn mowers")]
 //   public static $lawnMowersDropDown = '//*[@class="product-navigation"]//a[contains(text(),"Lawn mowers")]';
    public static $lawnMowersDropDown = '//a[@href="/lawn-mowers/"]';

    public static $petrolFourWheelLawnMowers = '//*[@class="product-navigation"]//a[contains(text(),"Petrol Four Wheel Lawn Mowers ")]';
    public static $petrolLawnMowers = '//*[@class="product-navigation"]//a[contains(text(),"Petrol Lawn Mowers")]';
    public static $h1 = '//h1';




    public function goToPetrolFourWheelLawnMowersPage (){
        $I = $this->tester;
        try {
            $I->waitForElementVisible(self::$lawnMowersDropDown);
            $I->moveMouseOver(self::$lawnMowersDropDown);
            $I->waitForElementVisible(self::$petrolFourWheelLawnMowers);
            $I->click(self::$petrolFourWheelLawnMowers);
        }
        catch(Exception $e){
            $I->amOnPage('/lawn-mowers/petrol-lawnmowers/petrol-four-wheel-rotary-lawn-mowers');
            $I->waitForElement(self::$h1);
            $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
        }
    }

// Petrol Four Wheel Rotary Lawn Mowersk
    public static $push4PetrolLawnMowersBlock = './/*[@ alt="Push 4-Wheel Petrol Lawn Mowers"]';
    public static $mountFieldPush4WheelPetrolLawnMowers = './/*[@alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';
    public static $mountFieldLogo = './/*[@alt="Mountfield Push 4-Wheel Petrol Lawn Mowers"]';
    public static $sellingProductOneMoreLink = '//a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductOneLessLink = '//a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductOneLink = '//h2/a[@title="Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)"]';

        public function bestSellingProductOne(){
            $I = $this->tester;
            $I->click(self::$push4PetrolLawnMowersBlock);
            $I->waitForElementVisible(self::$mountFieldLogo);
            $I->click(self::$mountFieldLogo);
            $I->waitForElementVisible(self::$sellingProductOneMoreLink);
            $I->see('Mountfield Push 4-Wheel Petrol Lawn Mowers',self::$h1);
            $I->scrollTo(self::$sellingProductOneMoreLink);
            $I->click(self::$sellingProductOneMoreLink);
            $I->waitForElement(self::$sellingProductOneLessLink);
            $I->click(self::$sellingProductOneLink);
            $I->waitForElement(self::$productTabsBlock);
            $I->see('Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)',self::$h1);
    }

// Best Selling Product Two: Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)
//Main Page                             //*[@class="item3"]/a[contains(text(),"Lawn care")]
    public static $lawnCareDropDown = '//a[contains(text(),"Lawn care")]';
    public static $petrolScarifiersPage = '//a[contains(text(),"Petrol Scarifiers")]';

    public function goToPetrolScarifiersPage (){
        $I = $this->tester;
    try {
        $I->moveMouseOver(self::$lawnCareDropDown);
        $I->waitForElementVisible(self::$petrolScarifiersPage);
        $I->click(self::$petrolScarifiersPage);
        $I->waitForElement(self::$h1);
        $I->see('Aerator and Scarifier Deals',self::$h1);
    } catch (Exception $e){
        $I->amOnPage('/lawn-care/aerators-and-scarifiers/all-deals-3336/as-filter-power-source/petrol');
        $I->waitForElement(self::$h1);
        $I->see('Aerator and Scarifier Deals',self::$h1);
        }
    }

    public static $sellingProductSecondMoreLink = '//a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductSecondLessLink = '//a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductSecondLink = '//h2/a[@title="Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)"]';


    public function bestSellingProductSecond(){
        $I = $this->tester;
        $I->waitForElementVisible(self::$sellingProductSecondLink);
        $I->scrollTo(self::$sellingProductSecondMoreLink);
        $I->click(self::$sellingProductSecondMoreLink);
        $I->waitForElement(self::$sellingProductSecondLessLink);
        $I->click(self::$sellingProductSecondLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)',self::$h1);

    }

//Best Selling Product Three: Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)
//Main Page

    public static $sellingProductThreeMoreLink = '//a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]/../../../div/a[@class="more"]';
    public static $sellingProductThreeLessLink = '//a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]/../../../div/a[@class="less"]';
    public static $sellingProductThreeLink = '//h2/a[@title="Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)"]';

    //h2/a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]


// Self-Propelled 4-Wheel Petrol Lawn Mowers Page
    public static $selfMountFieldLogo = '//*[@alt="Mountfield Self Propelled Lawn Mowers"]';

    public function bestSellingProductThree(){
        $I = $this->tester;
        $I->click(self::$mountFieldPush4WheelPetrolLawnMowers);
        $I->waitForElementVisible(self::$selfMountFieldLogo);
        $I->see('Self-Propelled 4-Wheel Petrol Lawn Mowers',self::$h1);
        $I->click(self::$selfMountFieldLogo);
        $I->waitForElementVisible(self::$sellingProductThreeLink);
        $I->see('Mountfield Self Propelled Lawn Mowers',self::$h1);
        $I->scrollTo(self::$sellingProductThreeMoreLink);
        $I->click(self::$sellingProductThreeMoreLink);
        $I->waitForElement(self::$sellingProductThreeLessLink);
        $I->click(self::$sellingProductThreeLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)',self::$h1);

    }

// Best Selling Product Four: Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled Lawn Mower (Special Offer)
//Lawn Mowers page
    public static $petrolLawnMowersBlock ='//*[@alt="Petrol Lawn Mowers"]';


  // Petrol Lawn Mowers Page
    public static $petrolFourWhellRotaryLawnMowersBlock = '//*[@class="subcat_container petrol-four-wheel-rotary-lawn-mowers"]/h3/a';
    // Petrol Four Whell Rotary Lawn Mowers
    public static $SelfPropelled4WheelPetrolLawnMowersBlock = '//*[@alt="Self-Propelled 4-Wheel Petrol Lawn Mowers"]';

    //Self-Propelled 4-Wheel Petrol Lawn Mowers page
    public static $tabbedPanel = '.product-collateral';
    public static $lawnSizeTab = '//*[@class="current"]/span';
    public static $cuttingTab ='//*[@class = "toggle-tabs"]//span[contains(text(),"Cutting Width")]';
    public static $cuttingWidthInfoTab = '//*[@id="collateral-tabs"]/dd[2]//li';
    public static $priceTab = '//*[@class = "toggle-tabs"]//span[contains(text(),"Price")]';
    public static $priceInfoTab = '//*[@id="collateral-tabs"]/dd[3]//li';
    public static $bestSellingTab = '//*[@class = "toggle-tabs"]//span[contains(text(),"Best Sellers")]';
    public static $bestSellingInfoTab = '//*[@id="collateral-tabs"]/dd[4]//li';
   // public static $bestSellingOleoMacG53Product = '//h2/a[contains(text(),"Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled")]';
    public static $bestSellingProduct3 = '//*[@id="md-recommendations"]/div[3]/div[1]';
    // Product page
    public static $productTabsBlock = '//*[@class="toggle-tabs"]';

    public function goToLawnMowersPage ()
    {
        $I = $this->tester;
        $I->waitForElement(self::$lawnMowersDropDown);
        $I->click(self::$lawnMowersDropDown);
        $I->see('Lawn Mowers', self::$h1);
    }

    public function bestSellingProductFour ()   {
        $I = $this->tester;
        $I->waitForElementVisible(self::$petrolLawnMowersBlock);
        $I->click(self::$petrolLawnMowersBlock);
        $I->waitForElementVisible(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->see('Petrol Lawn Mowers',self::$h1);
        $I->click(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->waitForElementVisible(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers',self::$h1);
        $I->click(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->waitForElement(self::$tabbedPanel);
        $I->scrollTo(self::$tabbedPanel);
        $I->click(self::$cuttingTab);
        $I->waitForElementVisible(self::$cuttingWidthInfoTab);
        $I->click(self::$priceTab);
        $I->waitForElementVisible(self::$priceInfoTab);
        $I->click(self::$bestSellingTab);
        $I->waitForElementVisible(self::$bestSellingInfoTab);
        $I->click(self::$bestSellingProduct3);
        $I->waitForElement(self::$productTabsBlock);
    }

// Best Selling Product Five: Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)

// cutting Width
    public static $cutting4546cm = '//*[@title=\'45-46cm (18")\']';

// Cutting 45-46 Filter Page
    public static $MountFieldSP180SelfPropelledPetrolLawnMoreLink  = '//a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]/../../../div/a[@class="more"]';
    public static $MountFieldSP180SelfPropelledPetrolLawnLessLink = '//a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]/../../../div/a[@class="less"]';
    public static $MountFieldSP180SelfPropelledPetrolLawnLink = '//h2/a[@title="Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)"]';


    public function bestSellingProductFive ()    {
        $I = $this->tester;
        $I->waitForElementVisible(self::$petrolLawnMowersBlock);
        $I->click(self::$petrolLawnMowersBlock);
        $I->waitForElementVisible(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->see('Petrol Lawn Mowers', self::$h1);
        $I->click(self::$petrolFourWhellRotaryLawnMowersBlock);
        $I->waitForElementVisible(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->see('Petrol Four Wheel Rotary Lawn Mowers', self::$h1);
        $I->click(self::$SelfPropelled4WheelPetrolLawnMowersBlock);
        $I->waitForElement(self::$tabbedPanel);
        $I->scrollTo(self::$tabbedPanel);
        $I->click(self::$cuttingTab);
        $I->waitForElementVisible(self::$cutting4546cm);
        $I->click(self::$cutting4546cm);
        $I->waitForElementVisible(self::$MountFieldSP180SelfPropelledPetrolLawnMoreLink);
        $I->click(self::$MountFieldSP180SelfPropelledPetrolLawnMoreLink);
        $I->waitForElementVisible(self::$MountFieldSP180SelfPropelledPetrolLawnLessLink);
        $I->click(self::$MountFieldSP180SelfPropelledPetrolLawnLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)', self::$h1);

    }


// Best Selling Product Six: Mountfield 1530M Lawn Tractor
//Main Page //*[@class="item2"]/a[contains(text(),"Lawn Tractors")]
    public static $lawnTractorDropDown = '//*[@class="product-navigation"]/ul/li[2]/a[contains(text(),"Lawn Tractors")]';

// Lawn Tractors Page.
    public static $lawnTractorsBlock = '//*[@alt="Lawn Tractors"]';
    public static $MountFieldLawnTractorLogo = '//*[@alt="Mountfield Lawn Tractors"]';

    public function goToLawnTractorsPage ()
    {
        $I = $this->tester;
       // $I->amOnPage(self::$URL);
        $I->click(self::$lawnTractorDropDown);
        $I->see('Lawn & Garden Tractors', self::$h1);
    }

    public static $MountField1530MLawnTractorMoreLink  = '//a[@title="Mountfield 1530M Lawn Tractor"]/../../../div/a[@class="more"]';
    public static $MountField1530MLawnTractorLessLink = '//a[@title="Mountfield 1530M Lawn Tractor"]/../../../div/a[@class="less"]';
    public static $MountField1530MLawnTractorLink = '//a[@title="Mountfield 1530M Lawn Tractor"]';

    //a[@title="Mountfield 1530M Lawn Tractor"]

    public function bestSellingProductSix () {
        $I = $this->tester;
        $I->click(self::$lawnTractorsBlock);
        $I->waitForElement(self::$MountFieldLawnTractorLogo);
        $I->click(self::$MountFieldLawnTractorLogo);
        $I->waitForElementVisible(self::$MountField1530MLawnTractorMoreLink);
        $I->see('Mountfield Lawn Tractors',self::$h1);
        $I->scrollTo(self::$MountField1530MLawnTractorMoreLink);
        $I->click(self::$MountField1530MLawnTractorMoreLink);
        $I->waitForElementVisible(self::$MountField1530MLawnTractorLessLink);
        $I->click(self::$MountField1530MLawnTractorLink);
        $I->waitForElement(self::$productTabsBlock);
        $I->see('Mountfield 1530M Lawn Tractor',self::$h1);
    }


}