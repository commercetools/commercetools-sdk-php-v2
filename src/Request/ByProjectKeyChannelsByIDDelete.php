<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Channel\Channel;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyChannelsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Channel::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/channels/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Channel
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Channel
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyChannelsByIDDelete
     */
    public function withVersion($version): ByProjectKeyChannelsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyChannelsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyChannelsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
