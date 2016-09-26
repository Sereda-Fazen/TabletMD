<?php
use \Step\Acceptance;

/**
 * @group search
 */
class SearchCest
{

    function T1353TestSearchWithFollowingSearchQueriesCompareResultsToExpected(Page\SearchNew $searchNew) {
        $searchNew->search();
        $searchNew->searchDifferentTerms('Lawnmower','electric start petrol mowers','lawn garden tractors','scarifier','mountfield 1530','log splitters','lawnflite mini rider 60rde ride-on mower','mountfield','honda','einhell');
    }

    function T1354TestSearchWithTermYouExpectToProduceNoResults(Page\SearchNew $searchNew, \AcceptanceTester $I ) {
        $searchNew->search();
        $searchNew->searchInvalid('invalid');
        $I->see('No Results', '//div[@class="gs-snippet"]');
    }

    function T1355TestSearchWithPlural(Page\SearchNew $searchNew) {
        $searchNew->search();
        $searchNew->searchWithAPlural('Lawnmower','Lawnmowers');
    }

    function T1356TestSearchWithMisspelling(Page\SearchNew $searchNew) {
        $searchNew->search();
        $searchNew->searchMisspelling('chinsaws','chainsaws');
    }

    function T1357TestSearchWithLegalTermButOneThatYouExpectToReturnFewResults(Page\SearchNew $searchNew) {
        $searchNew->search();
        $searchNew->searchLegalTermReturnFewResults('cockpit','About 7 results');
    }
/*
    function T1358UseCategoryNavigationToFind6TopSellingProducts (Page\SearchNew $searchNew) {
        $searchNew->search();k
        $searchNew->goToPetrolFourWheelLawnMowersPage();
        $searchNew->bestSellingProductOne();    // Best Selling Product One: Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)
        $searchNew->goToPetrolScarifiersPage();
        $searchNew->bestSellingProductSecond(); // Best Selling Product Two: Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)
        $searchNew->goToPetrolFourWheelLawnMowersPage();
        $searchNew->bestSellingProductThree();  //Best Selling Product Three: Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)
        $searchNew->goToLawnMowersPage();
        $searchNew->bestSellingProductFour();  // Best Selling Product Four: Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled Lawn Mower (Special Offer)
        $searchNew->goToLawnMowersPage();
        $searchNew->bestSellingProductFive();   // Best Selling Product Five: Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)
        $searchNew->goToLawnTractorsPage();
        $searchNew->bestSellingProductSix(); // Best Selling Product Six: Mountfield 1530M Lawn Tractor
    }
*/
    function T1358UseCategoryNavigationToFindFirstSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToPetrolFourWheelLawnMowersPage();
        $searchNew->bestSellingProductOne();  // Best Selling Product One: Mountfield HP454 Petrol Rotary Hand-Propelled Lawnmower (Special Offer)
    }
    function T1358UseCategoryNavigationToFindSecondSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToPetrolScarifiersPage();
        $searchNew->bestSellingProductSecond();    // Best Selling Product Two: Einhell GC-SC 2240P Petrol Lawn Scarifier (Special Offer)

    }
    function T1358UseCategoryNavigationToFindThirdSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToPetrolFourWheelLawnMowersPage();
        $searchNew->bestSellingProductThree();  //Best Selling Product Three: Mountfield SP533 Self-propelled Petrol Lawn Mower (Special Offer)
    }

    function T1358UseCategoryNavigationToFindFourthSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToLawnMowersPage();
        $searchNew->bestSellingProductFour();  // Best Selling Product Four: Oleo-Mac G53-TK AllRoad Plus-4 Self-Propelled Lawn Mower (Special Offer)
    }
    function T1358UseCategoryNavigationToFindFifthSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToLawnMowersPage();
        $searchNew->bestSellingProductFive();   // Best Selling Product Five: Mountfield SP180 Self-Propelled Petrol Lawn Mower (Exclusive Special Offer)
    }
    function T1358UseCategoryNavigationToFindSixthSellingProducts (Page\SearchNew $searchNew)
    {
        $searchNew->goToLawnTractorsPage();
        $searchNew->bestSellingProductSix(); // Best Selling Product Six: Mountfield 1530M Lawn Tractor.
    }














}

