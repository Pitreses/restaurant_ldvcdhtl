<?php
namespace Ldvcdhtl\RestaurantLdvcdhtl\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dilan Hassan <dilan.hassan@etu.u-bordeaux.fr>
 * @author Valentin Carrichon <valentin.carrichon@etu.u-bordeaux.fr>
 * @author Théau Leclere <theau.leclere@etu.u-bordeaux.fr>
 * @author Laurie Dumery <laurie.dumery@etu.u-bordeaux.fr>
 * @author David Jacquelin <david.jacquelin@etu.u-bordeaux.fr>
 */
class SuggestionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Suggestion
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Suggestion();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStartDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartDate()
        );
    }

    /**
     * @test
     */
    public function setStartDateForDateTimeSetsStartDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEndDate()
        );
    }

    /**
     * @test
     */
    public function setEndDateForDateTimeSetsEndDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEndDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'endDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForObjectStorageContainingDishSetsDishes()
    {
        $dish = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDishes->attach($dish);
        $this->subject->setDishes($objectStorageHoldingExactlyOneDishes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDishes,
            'dishes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDishToObjectStorageHoldingDishes()
    {
        $dish = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->addDish($dish);
    }

    /**
     * @test
     */
    public function removeDishFromObjectStorageHoldingDishes()
    {
        $dish = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->removeDish($dish);
    }
}
