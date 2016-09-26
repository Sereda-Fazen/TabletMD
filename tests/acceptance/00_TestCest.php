<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

        function T1402TestThePagingTopAndBottom(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\CategorySteps $I)
        {
                $categoryNavigation->home();
                $categoryNavigation->lawnTractor();
                $I->paging();

        }



}

