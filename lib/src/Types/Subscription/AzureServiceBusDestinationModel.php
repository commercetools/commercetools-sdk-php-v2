<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationModel;

class AzureServiceBusDestinationModel extends DestinationModel implements AzureServiceBusDestination {
    const DISCRIMINATOR_VALUE = 'AzureServiceBus';

    /**
     * @var string
     */
    protected $connectionString;

    /**
     * @return string
     */
    public function getConnectionString()
    {
        if (is_null($this->connectionString)) {
            $value = $this->raw(AzureServiceBusDestination::FIELD_CONNECTION_STRING);
            $value = (string)$value;
            $this->connectionString = $value;
        }
        return $this->connectionString;
    }

    /**
     * @param string $connectionString
     * @return $this
     */
    public function setConnectionString(string $connectionString)
    {
        $this->connectionString = (string)$connectionString;

        return $this;
    }

}
