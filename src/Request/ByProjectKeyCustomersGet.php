<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Customer\CustomerPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomersGet extends ApiRequest
{
    const RESULT_TYPE = CustomerPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/customers', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $token
     * @return ByProjectKeyCustomersGet
     */
    public function withToken($token): ByProjectKeyCustomersGet
    {
        return $this->withQueryParam('token', $token);
    }

}
