<?php

App::uses('View', 'View');
App::uses('Helper', 'View');
App::uses('BsHelper', 'View/Helper');
App::uses('HtmlHelper', 'View/Helper');

/**
 * BsHelper Test Case
 *
 */
class BsHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
    public function setUp()
    {
    	parent::setUp();
	    $View = new View();
	    $this->Bs = new BsHelper($View);
    }

    public function testClose()
    {
    	$result = $this->Bs->close();

		$expected = array('/div');

    	$this->assertTags($result, $expected);
    }


/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bs);

		parent::tearDown();
	}

}
