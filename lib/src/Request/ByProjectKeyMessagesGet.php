<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Message\MessagePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyMessagesGet extends ApiRequest
{
    const RESULT_TYPE = MessagePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/messages');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return MessagePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  MessagePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyMessagesGet
     */
    public function withExpand($expand): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyMessagesGet
     */
    public function withWhere($where): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyMessagesGet
     */
    public function withSort($sort): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyMessagesGet
     */
    public function withLimit($limit): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyMessagesGet
     */
    public function withOffset($offset): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyMessagesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyMessagesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
