<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Customer\CustomerSignInResult;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Customer\CustomerSignin;


class ByProjectKeyLoginPost extends ApiRequest
{
    const RESULT_TYPE = CustomerSignInResult::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, CustomerSignin $body, array $headers = [])
    {
        $uri = sprintf('/%s/login', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerSignInResult
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerSignInResult
    {
        return parent::map($response, $mapper);
    }

}
