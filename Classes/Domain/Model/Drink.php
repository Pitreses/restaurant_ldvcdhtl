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
 * Boissons
 */
class Drink extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Prix
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $price = 0.0;

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Alcoolisé
     * 
     * @var string
     */
    protected $alcoholic = '';

    /**
     * Volume
     * 
     * @var string
     */
    protected $volume = '';

    /**
     * category
     * 
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Category
     * @lazy
     */
    protected $category = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the alcoholic
     * 
     * @return string $alcoholic
     */
    public function getAlcoholic()
    {
        return $this->alcoholic;
    }

    /**
     * Sets the alcoholic
     * 
     * @param string $alcoholic
     * @return void
     */
    public function setAlcoholic($alcoholic)
    {
        $this->alcoholic = $alcoholic;
    }

    /**
     * Returns the volume
     * 
     * @return string $volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets the volume
     * 
     * @param string $volume
     * @return void
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Returns the category
     * 
     * @return \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
}
