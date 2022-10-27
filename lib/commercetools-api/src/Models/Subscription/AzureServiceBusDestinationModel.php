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

/**
 * @internal
 */
final class AzureServiceBusDestinationModel extends JsonObjectModel implements AzureServiceBusDestination
{
    public const DISCRIMINATOR_VALUE = 'AzureServiceBus';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $connectionString;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $connectionString = null,
        ?string $type = null
    ) {
        $this->connectionString = $connectionString;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>SharedAccessKey is partially hidden on retrieval for security reasons.</p>
     *
     *
     * @return null|string
     */
    public function getConnectionString()
    {
        if (is_null($this->connectionString)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONNECTION_STRING);
            if (is_null($data)) {
                return null;
            }
            $this->connectionString = (string) $data;
        }

        return $this->connectionString;
    }


    /**
     * @param ?string $connectionString
     */
    public function setConnectionString(?string $connectionString): void
    {
        $this->connectionString = $connectionString;
    }
}
