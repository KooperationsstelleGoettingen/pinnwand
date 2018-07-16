<?php

namespace \Tests\Unit\Domain\Model;

/***************************************************************
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
 * Test case for class \DUD\DudPinnwand\Domain\Model\Pinnwand.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Tom Lachemund <t.lachemund@d-welt.de>
 */
class PinnwandTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase
{
    /**
     * @var \DUD\DudPinnwand\Domain\Model\Pinnwand
     */
    protected $subject;

    public function setUp()
    {
        $this->subject = new \DUD\DudPinnwand\Domain\Model\Pinnwand();
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        $this->assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        $this->assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForStringSetsImage()
    {
        $this->subject->setImage('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHeaderReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getHeader()
        );
    }

    /**
     * @test
     */
    public function setHeaderForStringSetsHeader()
    {
        $this->subject->setHeader('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'header',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink()
    {
        $this->subject->setLink('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTextReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getText()
        );
    }

    /**
     * @test
     */
    public function setTextForStringSetsText()
    {
        $this->subject->setText('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'text',
            $this->subject
        );
    }
}
