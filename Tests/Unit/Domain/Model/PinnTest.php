<?php
namespace KoopGoe\Pinnwand\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Jan Schrewe <jan.schrewe@uni-goettingen.de>
 */
class PinnTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \KoopGoe\Pinnwand\Domain\Model\Pinn
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \KoopGoe\Pinnwand\Domain\Model\Pinn();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getHeaderReturnsInitialValueForString()
    {
        self::assertSame(
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

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'header',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
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

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString()
    {
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'text',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBackgroundcolorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBackgroundcolor()
        );
    }

    /**
     * @test
     */
    public function setBackgroundcolorForStringSetsBackgroundcolor()
    {
        $this->subject->setBackgroundcolor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'backgroundcolor',
            $this->subject
        );
    }
}
