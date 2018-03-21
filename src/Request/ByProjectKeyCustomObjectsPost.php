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
use Commercetools\Types\CustomObject\CustomObjectDraft;


class ByProjectKeyCustomObjectsPost extends ApiRequest
{
    const RESULT_TYPE = CustomObject::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, CustomObjectDraft $body, array $headers = [])
    {
        $uri = sprintf('/%s/custom-objects', $projectKey);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @return ByProjectKeyCustomObjectsPost
     */
    public function withExpand($expand): ByProjectKeyCustomObjectsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
