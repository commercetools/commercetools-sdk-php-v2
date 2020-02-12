<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class AzureServiceBusDestinationModel extends JsonObjectModel implements AzureServiceBusDestination
{
    public const DISCRIMINATOR_VALUE = 'AzureServiceBus';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $connectionString;


    public function __construct(
        string $connectionString = null
    ) {
        $this->connectionString = $connectionString;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Destination::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getConnectionString()
    {
        if (is_null($this->connectionString)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(AzureServiceBusDestination::FIELD_CONNECTION_STRING);
            if (is_null($data)) {
                return null;
            }
            $this->connectionString = (string) $data;
        }

        return $this->connectionString;
    }

    public function setConnectionString(?string $connectionString): void
    {
        $this->connectionString = $connectionString;
    }
}
