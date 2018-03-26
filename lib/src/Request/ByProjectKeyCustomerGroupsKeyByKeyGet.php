<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CustomerGroup\CustomerGroup;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomerGroupsKeyByKeyGet extends ApiRequest
{
    const RESULT_TYPE = CustomerGroup::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/customer-groups/key={key}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerGroup
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerGroup
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomerGroupsKeyByKeyGet
     */
    public function withExpand($expand): ByProjectKeyCustomerGroupsKeyByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
