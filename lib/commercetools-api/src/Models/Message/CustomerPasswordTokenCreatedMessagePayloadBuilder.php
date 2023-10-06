<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerPasswordTokenCreatedMessagePayload>
 */
final class CustomerPasswordTokenCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customerId;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**
     * <p>Unique identifier of the Customer.</p>
     *

     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * <p>Date and time (UTC) the password token expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param ?string $customerId
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     * @return $this
     */
    public function withExpiresAt(?DateTimeImmutable $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }


    public function build(): CustomerPasswordTokenCreatedMessagePayload
    {
        return new CustomerPasswordTokenCreatedMessagePayloadModel(
            $this->customerId,
            $this->expiresAt
        );
    }

    public static function of(): CustomerPasswordTokenCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
