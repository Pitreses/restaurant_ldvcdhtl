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
class SuggestionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Controller\SuggestionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Ldvcdhtl\RestaurantLdvcdhtl\Controller\SuggestionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
