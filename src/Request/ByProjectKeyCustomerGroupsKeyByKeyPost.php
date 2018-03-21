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
use Commercetools\Types\Update;


class ByProjectKeyCustomerGroupsKeyByKeyPost extends ApiRequest
{
    const RESULT_TYPE = CustomerGroup::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, Update $body, array $headers = [])
    {
        $uri = sprintf('/%s/customer-groups/key=%s', $projectKey, $key);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @return ByProjectKeyCustomerGroupsKeyByKeyPost
     */
    public function withExpand($expand): ByProjectKeyCustomerGroupsKeyByKeyPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
