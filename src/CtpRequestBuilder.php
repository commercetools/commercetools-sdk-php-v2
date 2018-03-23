<?php
namespace Commercetools;

use Commercetools\Base\Mapper;
use Commercetools\Client\ApiRequest;
use Commercetools\Client\Resource;
use Commercetools\Request\RequestBuilder;

class CtpRequestBuilder extends Resource
{
    public function __construct($projectKey, Mapper $mapper = null)
    {
        parent::__construct('', ['projectKey' => $projectKey], $mapper);
    }

    public function with()
    {
        $builder = new RequestBuilder($this->getArgs(), $this->getMapper());
        return $builder->withProjectKeyValue();
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $headers
     * @param $body
     * @param string $version
     * @return ApiRequest
     */
    final public function buildCustom(
        string $method,
        string $uri,
        array $headers = [],
        $body = null,
        string $version = '1.1'
    ): ApiRequest {
        return new ApiRequest($method, $uri, $headers, $body, $version);
    }
}
