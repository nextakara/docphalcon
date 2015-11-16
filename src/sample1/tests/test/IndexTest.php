<?php

class IndexTest extends \UnitTestCase
{
    public function testIndexAction()
    {
        $this->dispatch( '/' );
        $this->assertController( 'index' );
        $this->assertAction( 'index' );
//        $this->assertResponseCode(200);
    }

    public function testIndex2Action()
    {
        $this->dispatch( '/test' );
        $this->assertController( 'index' );
        $this->assertAction( 'test' );
//        $this->assertResponseCode(200);
    }
}
