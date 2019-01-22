<?php

use PHPUnit\Framework\TestCase;

class ConnectTest extends TestCase
{
    public function testModeDataProvider()
    {

        return 1;
    }

    public function testSetTestModeIsValid()
    {
        $connect = new \MojeId\Connect();

        $this->assertIsBool($connect->isTestMode(), 'Method must output boolean.');
    }

    /**
     * @uses Auth_OpenID_AuthRequest
     */
    public function testConnect()
    {
        $this->assertDirectoryExists('/cache');

        $this->isInstanceOf(Auth_OpenID_Consumer::class);
    }

    /**
     * @dataProvider testModeDataProvider
     * @return bool
     */
    public function testIsSetModeIsValid()
    {
        $mode = true;
        $this->assertIsBool(func_get_args(), 'Method must output boolean.');

        return $mode;
    }

}