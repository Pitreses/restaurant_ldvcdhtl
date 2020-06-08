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
 * MenuController
 */
class MenuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * menuRepository
     * 
     * @var \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Repository\MenuRepository
     * @inject
     */
    protected $menuRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $menus = $this->menuRepository->findAll();
        $this->view->assign('menus', $menus);
    }

    /**
     * action show
     * 
     * @param \Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Menu $menu
     * @return void
     */
    public function showAction(\Ldvcdhtl\RestaurantLdvcdhtl\Domain\Model\Menu $menu)
    {
        $this->view->assign('menu', $menu);
    }
}
