<?php
namespace KoopGoe\Pinnwand\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Jan Schrewe <jan.schrewe@uni-goettingen.de>
 */
class PinnControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \KoopGoe\Pinnwand\Controller\PinnController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\KoopGoe\Pinnwand\Controller\PinnController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPinnsFromRepositoryAndAssignsThemToView()
    {

        $allPinns = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $pinnRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $pinnRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPinns));
        $this->inject($this->subject, 'pinnRepository', $pinnRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('pinns', $allPinns);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
