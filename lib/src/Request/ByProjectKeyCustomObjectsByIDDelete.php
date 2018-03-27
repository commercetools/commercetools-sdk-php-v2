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

class ByProjectKeyCustomObjectsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = CustomObject::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/custom-objects/{ID}');
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
     * @return ByProjectKeyCustomObjectsByIDDelete
     */
    public function withVersion($version): ByProjectKeyCustomObjectsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }

}
