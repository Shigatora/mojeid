<?php

namespace MojeId;

class Connect
{
    /**
     * @var string
     */
    private $endPoint;

    public function __construct(string $endPoint, array $config = array())
    {
        $this->endPoint = $endPoint;
        $this->config   = array_merge(
            [
            'testMode'  => 1
            ],
            $config
        );
    }

    /**
     * @return bool
     */
    public function isTestMode(): bool
    {
        return $this->config['testMode'];
    }

    /**
     * @param bool $testMode
     */
    public function setTestMode(bool $testMode): void
    {
        $this->config['testMode'] = $testMode;
    }

    /**
     * @return \Auth_OpenID_Consumer
     * @throws \Exception
     */
    public function getConsumer()
    {
        $fileStore = new FileStore();

        return new \Auth_OpenID_Consumer($fileStore->create());
    }

    /**
     * @throws \Exception
     */
    public function connect()
    {
        $consumerConnect = $this->getConsumer()->begin($this->endPoint);

        if (!$consumerConnect) {
            throw new \Exception('Failed to create auth request.');
        }

        return $consumerConnect;
    }
}
