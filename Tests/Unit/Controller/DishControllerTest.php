<?php
namespace Ldvcdhtl\RestaurantLdvcdhtl\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dilan Hassan <dilan.hassan@etu.u-bordeaux.fr>
 * @author Valentin Carrichon <valentin.carrichon@etu.u-bordeaux.fr>
 * @author Théau Leclere <theau.leclere@etu.u-bordeaux.fr>
 * @author Laurie Dumery <laurie.dumery@etu.u-bordeaux.fr>
 * @author David Jacquelin <david.jacquelin@etu.u-bordeaux.fr>
 */
class DishControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Controller\DishController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Ldvcdhtl\RestaurantLdvcdhtl\Controller\DishController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllDishesFromRepositoryAndAssignsThemToView()
    {

        $allDishes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dishRepository = $this->getMockBuilder(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Repository\DishRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $dishRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDishes));
        $this->inject($this->subject, 'dishRepository', $dishRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('dishes', $allDishes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDishToView()
    {
        $dish = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('dish', $dish);

        $this->subject->showAction($dish);
    }
}
