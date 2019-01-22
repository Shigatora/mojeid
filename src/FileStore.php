<?php
namespace MojeId;


class FileStore
{
    /**
     * @var string
     */
    private $storePath;

    /**
     * FileStore constructor.
     * @param string $storePath
     */
    public function __construct(string $storePath = 'cache')
    {

        $this->storePath = $storePath;
    }

    /**
     * @return string
     */
    public function getStorePath(): string
    {
        return $this->storePath;
    }

    /**
     * @param string $storePath
     */
    public function setStorePath(string $storePath): void
    {
        $this->storePath = $storePath;
    }

    /**
     * @throws \Exception
     */
    public function create()
    {
        if (!file_exists($this->storePath) && mkdir($this->storePath, 0777, true)) {
            throw new \Exception('Could not create new Filestore directory.');
        }

        return new \Auth_OpenID_FileStore($this->storePath);
    }
}