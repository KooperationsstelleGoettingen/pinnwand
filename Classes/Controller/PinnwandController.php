<?php
namespace DUD\Pinnwand\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2018 Jan Schrewe (jan.schrewe@uni-goettingen.de), Kooperationstelle Hochschulen und Gewerkschaften Göttingen
 *  (c) 2014 Tom Lachemund <t.lachemund@d-welt.de>, design & distribution
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

 use \DUD\Pinnwand\Domain\Repository\PinnwandRepository;
 use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

 /**
 * PinnwandController
 */
class PinnwandController extends ActionController
{

    /**
     * pinnwandRepository
     *
     * @var \DUD\Pinnwand\Domain\Repository\PinnwandRepository
     * @inject
     */
    protected $pinnwandRepository;

    /**
     * Inject the product repository
     *
     * @param \MyVendor\StoreInventory\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(PinnwandRepository $pinnwandRepository)
    {
        $this->pinnwandRepository = $pinnwandRepository;
    }


    /**
     * Initializes the current action
     *
     * @return void
     */
    public function initializeAction()
    {
        // Only do this in Frontend Context
        if (!empty($GLOBALS['TSFE']) && is_object($GLOBALS['TSFE'])) {
            // We only want to set the tag once in one request, so we have to cache that statically if it has been done
            static $cacheTagsSet = false;

            /** @var $typoScriptFrontendController \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController  */
            $typoScriptFrontendController = $GLOBALS['TSFE'];
            if (!$cacheTagsSet) {
                $typoScriptFrontendController->addCacheTags(array('tx_dudpinnwand'));
                $cacheTagsSet = true;
            }
            $this->typoScriptFrontendController = $typoScriptFrontendController;
        }
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $limit = $this->settings['number_of_pinns'] > 0 ? $this->settings['number_of_pinns'] : 5;
        $pinnwands = $this->pinnwandRepository->findAllByLimit(intval($limit));
        $this->view->assign('pinnwands', $pinnwands);
    }
}
