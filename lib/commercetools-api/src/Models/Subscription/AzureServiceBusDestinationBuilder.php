<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AzureServiceBusDestination>
 */
final class AzureServiceBusDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $connectionString;

    /**
     * <p>SharedAccessKey is partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getConnectionString()
    {
        return $this->connectionString;
    }

    /**
     * @param ?string $connectionString
     * @return $this
     */
    public function withConnectionString(?string $connectionString)
    {
        $this->connectionString = $connectionString;

        return $this;
    }


    public function build(): AzureServiceBusDestination
    {
        return new AzureServiceBusDestinationModel(
            $this->connectionString
        );
    }

    public static function of(): AzureServiceBusDestinationBuilder
    {
        return new self();
    }
}
