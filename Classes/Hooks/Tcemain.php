<?php
namespace DUD\DudPinnwand\Hooks;

/***************************************************************
 *  Copyright notice
 *
 * 	(c) 2018 Jan Schrewe (jan.schrewe@uni-goettingen.de), Kooperationstelle Hochschulen und Gewerkschaften Göttingen
 *  (c) 2011 Georg Ringer <typo3@ringerge.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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

/**
 * Hook into tcemain which is used to show preview of news item
 *
 * @package TYPO3
 * @subpackage tx_dudpinnwand
 */
class Tcemain
{

    /**
     * Flushes the cache if a news record was edited.
     *
     * @param array $params
     * @return void
     */
    public function clearCachePostProc(array $params)
    {
        if (isset($params['table']) && $params['table'] === 'tx_dudpinnwand_domain_model_pinnwand' && isset($params['uid'])) {
            $cacheTag = $params['table'] . '_' . $params['uid'];

            /** @var $cacheManager \TYPO3\CMS\Core\Cache\CacheManager */
            $cacheManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Cache\\CacheManager');
            $cacheManager->getCache('cache_pages')->flushByTag($cacheTag);
            $cacheManager->getCache('cache_pagesection')->flushByTag($cacheTag);
            $cacheManager->getCache('cache_pages')->flushByTag('tx_dudpinnwand');
            $cacheManager->getCache('cache_pagesection')->flushByTag('tx_dudpinnwand');
        }
    }
}
