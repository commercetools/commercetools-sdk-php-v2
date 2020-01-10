<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Exception;

use Commercetools\Base\JsonObject;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ApiClientException extends ClientException
{
    /**
     * @var ?JsonObject
     */
    private $result;

    /**
     * @param string      $message
     * @param ?JsonObject $result
     */
    public function __construct($message, $result, RequestInterface $request, ResponseInterface $response, \Exception $previous = null, array $handlerContext = [])
    {
        $this->result = $result;
        parent::__construct($message, $request, $response, $previous, $handlerContext);
    }

    /**
     * @return ?JsonObject
     */
    public function getResult()
    {
        return $this->result;
    }
}
