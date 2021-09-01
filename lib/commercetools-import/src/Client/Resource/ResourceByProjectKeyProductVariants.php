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
class ResourceByProjectKeyProductVariants extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/product-variants', $args, $client);
    }

    /**
     */
    public function importContainers(): ResourceByProjectKeyProductVariantsImportContainers
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyProductVariantsImportContainers($args, $this->getClient());
    }
    /**
     * @deprecated
     */
    public function importSinkKeyWithImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKey($args, $this->getClient());
    }
}
