<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Type\Type;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Type\TypeUpdate;


class ByProjectKeyTypesKeyByKeyPost extends ApiRequest
{
    const RESULT_TYPE = Type::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, TypeUpdate $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/types/key={key}');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Type
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Type
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyTypesKeyByKeyPost
     */
    public function withExpand($expand): ByProjectKeyTypesKeyByKeyPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
