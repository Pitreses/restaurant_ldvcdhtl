<?php
namespace Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model;


/***
 *
 * This file is part of the "Restaurant LDVCDHTL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Dilan Hassan <dilan.hassan@etu.u-bordeaux.fr>
 *           Valentin Carrichon <valentin.carrichon@etu.u-bordeaux.fr>
 *           Théau Leclere <theau.leclere@etu.u-bordeaux.fr>
 *           Laurie Dumery <laurie.dumery@etu.u-bordeaux.fr>
 *           David Jacquelin <david.jacquelin@etu.u-bordeaux.fr>
 *
 ***/
/**
 * Suggestion
 */
class Suggestion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * startDate
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $startDate = null;

    /**
     * endDate
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $endDate = null;

    /**
     * dishes
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish>
     * @lazy
     */
    protected $dishes = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->dishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the startDate
     * 
     * @return \DateTime $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the startDate
     * 
     * @param \DateTime $startDate
     * @return void
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns the endDate
     * 
     * @return \DateTime $endDate
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the endDate
     * 
     * @param \DateTime $endDate
     * @return void
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Adds a Dish
     * 
     * @param \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dish
     * @return void
     */
    public function addDish(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dish)
    {
        $this->dishes->attach($dish);
    }

    /**
     * Removes a Dish
     * 
     * @param \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dishToRemove The Dish to be removed
     * @return void
     */
    public function removeDish(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dishToRemove)
    {
        $this->dishes->detach($dishToRemove);
    }

    /**
     * Returns the dishes
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish> $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish> $dishes
     * @return void
     */
    public function setDishes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dishes)
    {
        $this->dishes = $dishes;
    }
}
