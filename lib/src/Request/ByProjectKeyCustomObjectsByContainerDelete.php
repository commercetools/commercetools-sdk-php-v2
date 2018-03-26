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

class ByProjectKeyCustomObjectsByContainerDelete extends ApiRequest
{
    const RESULT_TYPE = CustomObject::class;

    /**
     * @param $container
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $container, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{container}'], [$projectKey, $container], '/{projectKey}/custom-objects/{container}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyCustomObjectsByContainerDelete
     */
    public function withVersion($version): ByProjectKeyCustomObjectsByContainerDelete
    {
        return $this->withQueryParam('version', $version);
    }

}
