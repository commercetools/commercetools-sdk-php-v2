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

class ByProjectKeyCustomersEmailTokenByEmailTokenGet extends ApiRequest
{
    const RESULT_TYPE = Customer::class;

    /**
     * @param $emailToken
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $emailToken, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{emailToken}'], [$projectKey, $emailToken], '/{projectKey}/customers/email-token={emailToken}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @return ByProjectKeyCustomersEmailTokenByEmailTokenGet
     */
    public function withExpand($expand): ByProjectKeyCustomersEmailTokenByEmailTokenGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
