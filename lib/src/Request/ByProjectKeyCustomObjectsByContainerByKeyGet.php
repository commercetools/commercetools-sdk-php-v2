<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CustomObject\CustomObject;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomObjectsByContainerByKeyGet extends ApiRequest
{
    const RESULT_TYPE = CustomObject::class;

    /**
     * @param $container
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $container, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{container}', '{key}'], [$projectKey, $container, $key], '/{projectKey}/custom-objects/{container}/{key}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomObject
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomObject
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomObjectsByContainerByKeyGet
     */
    public function withExpand($expand): ByProjectKeyCustomObjectsByContainerByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
