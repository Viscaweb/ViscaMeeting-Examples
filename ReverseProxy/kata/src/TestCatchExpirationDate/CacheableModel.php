<?php
namespace TestCatchExpirationDate;

class CacheableModel
{
    /** @var string[] */
    private $headers;

    /** @var string */
    private $body;

    /** @var \DateTimeImmutable */
    private $expiresAt;

    /**
     * CacheableModel constructor.
     *
     * @param \string[] $headers
     * @param string    $body
     * @param \DateTimeImmutable $expiresAt
     */
    public function __construct(array $headers, $body, \DateTimeImmutable $expiresAt)
    {
        $this->headers = $headers;
        $this->body = $body;
        $this->expiresAt = $expiresAt;
    }

    /**
     * @return \string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

}
