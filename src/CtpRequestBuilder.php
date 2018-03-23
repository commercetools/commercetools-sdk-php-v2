<?php
declare(strict_types = 1);

namespace Commercetools;

use Commercetools\Base\Mapper;
use Commercetools\Client\ApiRequest;
use Commercetools\Client\Resource;
use Commercetools\Request\RequestBuilder;
use Commercetools\Request\Resource0;

class CtpRequestBuilder extends Resource
{
    public function __construct(string $projectKey, Mapper $mapper = null)
    {
        parent::__construct('', ['projectKey' => $projectKey], $mapper);
    }

    public function with(): Resource0
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
