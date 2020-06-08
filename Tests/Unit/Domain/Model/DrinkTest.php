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
class DrinkTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Drink
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Drink();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholicReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAlcoholic()
        );
    }

    /**
     * @test
     */
    public function setAlcoholicForStringSetsAlcoholic()
    {
        $this->subject->setAlcoholic('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'alcoholic',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVolumeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVolume()
        );
    }

    /**
     * @test
     */
    public function setVolumeForStringSetsVolume()
    {
        $this->subject->setVolume('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'volume',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }
}
