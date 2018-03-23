<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Extension\Extension;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyExtensionsKeyByKeyGet extends ApiRequest
{
    const RESULT_TYPE = Extension::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/extensions/key=%s', $projectKey, $key);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Extension
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Extension
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyExtensionsKeyByKeyGet
     */
    public function withExpand($expand): ByProjectKeyExtensionsKeyByKeyGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
