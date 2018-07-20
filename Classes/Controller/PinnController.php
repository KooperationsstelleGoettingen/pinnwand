<?php
namespace KoopGoe\Pinnwand\Controller;

/***
 *
 * This file is part of the "Pinnwand" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * PinnController
 */
class PinnController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $limit = $this->settings['number_of_pinns'] > 0 ? $this->settings['number_of_pinns'] : 5;
        $pinns = $this->pinnRepository->findAll(intval($limit));
        $this->view->assign('pinns', $pinns);
    }
}
