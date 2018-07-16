<?php
namespace DUD\Pinnwand\ViewHelpers;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class TypolinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

     /** @var $cObj ContentObjectRenderer */
    protected $cObj;
    /**
     * Link the pinn
     *
     * @param string $url Link to external or internal page
     * @return string
     */
    public function render($url)
    {
        $this->init();
        // set a basic configuration for cObj->typolink
        $tsConfiguration = array(
            'parameter' => $url
        );

        // generate link
        $link = $this->cObj->typolink($this->renderChildren(), $tsConfiguration);

        return $link;
    }

    /**
     * Initialize properties
     *
     * @return void
     */
    protected function init()
    {
        $this->cObj = GeneralUtility::makeInstance(ContentObjectRenderer::class);
    }
}
