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
 * DishController
 */
class DishController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dishRepository
     * 
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Repository\DishRepository
     * @inject
     */
    protected $dishRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     * 
     * @param \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action focus
     * 
     * @return void
     */
    public function focusAction()
    {
    }
}
