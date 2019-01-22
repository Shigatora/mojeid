<?php

namespace MojeId;

class Config
{
    /**
     * @var bool
     */
    private $testMode = true;

    public function __construct(?array $config = null)
    {
        if (is_array($config)) {
            foreach ($config as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    /**
     * @return bool
     */
    public function isTestMode(): bool
    {
        return $this->testMode;
    }

    /**
     * @param bool $testMode
     * @return Config
     */
    public function setTestMode(bool $testMode): Config
    {
        $this->testMode = $testMode;
        return $this;
    }

}