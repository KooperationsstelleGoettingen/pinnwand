<?php
namespace \Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Tom Lachemund <t.lachemund@d-welt.de>, design & distribution
 *  			
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
 * Test case for class DUD\DudPinnwand\Controller\PinnwandController.
 *
 * @author Tom Lachemund <t.lachemund@d-welt.de>
 */
class PinnwandControllerTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {

	/**
	 * @var DUD\DudPinnwand\Controller\PinnwandController
	 */
	protected $subject;

	public function setUp() {
		$this->subject = $this->getMock('DUD\\DudPinnwand\\Controller\\PinnwandController', array('redirect', 'forward'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllPinnwandsFromRepositoryAndAssignsThemToView() {

		$allPinnwands = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$pinnwandRepository = $this->getMock('DUD\\DudPinnwand\\Domain\\Repository\\PinnwandRepository', array('findAll'), array(), '', FALSE);
		$pinnwandRepository->expects($this->once())->method('findAll')->will($this->returnValue($allPinnwands));
		$this->inject($this->subject, 'pinnwandRepository', $pinnwandRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('pinnwands', $allPinnwands);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
