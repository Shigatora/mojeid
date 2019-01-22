<?php

namespace MojeId;

class Connect
{
    /**
     * @var string
     */
    private $endPoint;

    /**
     * @var Config
     */
    private $config;

    public function __construct(string $endPoint, ?Config $config = null)
    {
        if(is_null($config)) {
            $config = new Config();
        }

        $this->endPoint = $endPoint;
        $this->config   = $config;
    }

    /**
     * @return bool
     */
    public function isTestMode(): bool
    {
        return $this->config->isTestMode();
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
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
