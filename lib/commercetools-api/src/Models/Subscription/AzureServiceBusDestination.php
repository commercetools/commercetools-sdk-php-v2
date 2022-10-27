<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AzureServiceBusDestination extends Destination
{
    public const FIELD_CONNECTION_STRING = 'connectionString';

    /**
     * <p>SharedAccessKey is partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getConnectionString();

    /**
     * @param ?string $connectionString
     */
    public function setConnectionString(?string $connectionString): void;
}
