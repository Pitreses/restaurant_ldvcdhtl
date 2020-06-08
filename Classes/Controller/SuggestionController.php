<?php
namespace Ldvcdhtl\RestaurantLdvcdhtl\Controller;


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
 * SuggestionController
 */
class SuggestionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * suggestionRepository
     * 
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Repository\SuggestionRepository
     * @inject
     */
    protected $suggestionRepository = null;

    /**
     * action current
     * 
     * @return void
     */
    public function currentAction()
    {
    }

    /**
     * action incoming
     * 
     * @return void
     */
    public function incomingAction()
    {
    }
}
