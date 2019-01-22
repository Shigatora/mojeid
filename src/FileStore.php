<?php
namespace MojeId;


use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;

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
     * @throws IOException
     */
    public function create()
    {
        $filesystem = new Filesystem();
        if(!$filesystem->exists($this->storePath)) {
            $filesystem->mkdir($this->storePath);
        }

        return new \Auth_OpenID_FileStore($this->storePath);
    }
}