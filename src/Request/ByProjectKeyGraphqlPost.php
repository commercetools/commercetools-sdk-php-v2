<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyGraphqlPost extends ApiRequest
{
    const RESULT_TYPE = JsonObject::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body, array $headers = [])
    {
        $uri = sprintf('/%s/graphql', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return JsonObject
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  JsonObject
    {
        return parent::map($response, $mapper);
    }

}
