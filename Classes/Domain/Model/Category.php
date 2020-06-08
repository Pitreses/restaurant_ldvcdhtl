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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

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
}
