<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface AzureServiceBusDestination extends Destination
{
    
    const FIELD_CONNECTION_STRING = 'connectionString';

    /**
     *
     * @return string|null
     */
    public function getConnectionString();
    public function setConnectionString(?string $connectionString): void;
}