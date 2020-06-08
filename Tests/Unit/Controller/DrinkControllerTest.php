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
class DrinkControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Controller\DrinkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Ldvcdhtl\RestaurantLdvcdhtl\Controller\DrinkController::class)
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
    public function listActionFetchesAllDrinksFromRepositoryAndAssignsThemToView()
    {

        $allDrinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $drinkRepository = $this->getMockBuilder(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Repository\DrinkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $drinkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDrinks));
        $this->inject($this->subject, 'drinkRepository', $drinkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('drinks', $allDrinks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
