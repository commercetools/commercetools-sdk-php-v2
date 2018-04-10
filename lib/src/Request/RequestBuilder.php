<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Base\Mapper;
use Commercetools\Client\Resource;
use Commercetools\Client\ApiRequest;

class RequestBuilder extends Resource
{
    public function __construct(array $args = [], Mapper $mapper = null)
    {
        parent::__construct('', $args, $mapper);
    }

    /**
     * @return ResourceByProjectKey
     */
    public function withProjectKeyValue($projectKey = null): ResourceByProjectKey {
        $args = array_merge($this->getArgs(), array_filter(['projectKey' => $projectKey], function($value) { return !is_null($value); }));
        return new ResourceByProjectKey($this->getUri() . '/{projectKey}', $args, $this->getMapper());
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
