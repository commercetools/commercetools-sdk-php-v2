<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Channel\ChannelPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyChannelsGet extends ApiRequest
{
    const RESULT_TYPE = ChannelPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/channels', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ChannelPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ChannelPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyChannelsGet
     */
    public function withExpand($expand): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyChannelsGet
     */
    public function withWhere($where): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyChannelsGet
     */
    public function withSort($sort): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyChannelsGet
     */
    public function withLimit($limit): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyChannelsGet
     */
    public function withOffset($offset): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyChannelsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyChannelsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
