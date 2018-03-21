<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

class Resource
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var array
     */
    private $args = [];

    /**
     * @param string $uri
     * @param array $args
     */
    public function __construct(string $uri, array $args = [])
    {
        $this->uri = $uri;
        $this->args = $args;
    }

    /**
     * @return string
     */
    final protected function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @return array
     */
    final protected function getArgs(): array
    {
        return $this->args;
    }
}
