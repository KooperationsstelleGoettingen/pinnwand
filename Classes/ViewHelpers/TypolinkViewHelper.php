<?php
namespace DUD\DudPinnwand\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class TypolinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	 /** @var $cObj ContentObjectRenderer */
    protected $cObj;
	/**
	 * Link the pinn
	 *
	 * @param string $url Link to external or internal page
	 * @return string
	 */
	public function render($url) {
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
?>