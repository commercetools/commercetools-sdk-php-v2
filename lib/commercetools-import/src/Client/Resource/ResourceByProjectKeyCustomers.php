<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers', $args, $client);
    }

    /**
     */
    public function importContainers(): ResourceByProjectKeyCustomersImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersImportContainers($args, $this->getClient());
    }
    /**
     * @deprecated
     */
    public function importSinkKeyWithImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey($args, $this->getClient());
    }
}
