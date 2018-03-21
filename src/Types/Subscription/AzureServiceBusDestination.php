<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface AzureServiceBusDestination extends Destination {
    const FIELD_CONNECTION_STRING = 'connectionString';

    /**
     * @return string
     */
    public function getConnectionString();

    /**
     * @param string $connectionString
     * @return $this
     */
    public function setConnectionString(string $connectionString);

}
