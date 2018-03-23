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

class ByProjectKeyExtensionsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Extension::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/extensions/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyExtensionsByIDDelete
     */
    public function withVersion($version): ByProjectKeyExtensionsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyExtensionsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyExtensionsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
