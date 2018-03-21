<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Zone\Zone;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Zone\ZoneUpdate;


class ByProjectKeyZonesByIDPost extends ApiRequest
{
    const RESULT_TYPE = Zone::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, ZoneUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/zones/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Zone
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Zone
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyZonesByIDPost
     */
    public function withExpand($expand): ByProjectKeyZonesByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
