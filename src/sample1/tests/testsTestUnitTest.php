<?php

namespace Test;

/**
 * Class UnitTest
 */
class UnitTest extends \UnitTestCase
{
    public function testTestCase()
    {
        $this->assertEquals(
			'works',
            'works',
            'This is OK'
        );

        $this->assertEquals(
			'works1',
            'works1',
            'This will fail'
        );
    }
}
