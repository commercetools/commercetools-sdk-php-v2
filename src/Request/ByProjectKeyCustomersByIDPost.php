<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Customer\Customer;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Customer\CustomerUpdate;


class ByProjectKeyCustomersByIDPost extends ApiRequest
{
    const RESULT_TYPE = Customer::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, CustomerUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/customers/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Customer
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Customer
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomersByIDPost
     */
    public function withExpand($expand): ByProjectKeyCustomersByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
