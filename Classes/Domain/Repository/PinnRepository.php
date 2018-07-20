<?php
namespace KoopGoe\Pinnwand\Repository;

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

use TYPO3\CMS\Extbase\Persistence\Repository;

class ProductRepository extends Repository
{
    protected $defaultOrderings = array(
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    );

    /**
     * @param integer $limit
     */
    public function findAll($limit=0)
    {
        $query = $this->createQuery();
        if ($limit > 0) {
            $query->setLimit($limit);
        }
        return $query->execute();
    }
}
