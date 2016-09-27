<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

        function T1359UseCategoryNavigationToNavigateToTheVariousSaleDepartments(Page\CategoryNavigation $categoryNavigation, \Step\Acceptance\ProductsSteps $I)
        {
                $categoryNavigation->home();
                $categoryNavigation->saleDepartment();
        }


}

