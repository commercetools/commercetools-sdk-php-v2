<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerEmailTokenCreatedMessagePayloadModel extends JsonObjectModel implements CustomerEmailTokenCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerEmailTokenCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $customerId;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;

    /**
     *
     * @var ?string
     */
    protected $value;

    /**
     *
     * @var ?bool
     */
    protected $invalidateOlderTokens;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customerId = null,
        ?DateTimeImmutable $expiresAt = null,
        ?string $value = null,
        ?bool $invalidateOlderTokens = null,
        ?string $type = null
    ) {
        $this->customerId = $customerId;
        $this->expiresAt = $expiresAt;
        $this->value = $value;
        $this->invalidateOlderTokens = $invalidateOlderTokens;
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
     * <p>Unique identifier of the Customer.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }

    /**
     * <p>Date and time (UTC) the email token expires.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->expiresAt = $data;
        }

        return $this->expiresAt;
    }

    /**
     * <p>Value of the token, present only if the token's validity is 60 minutes or less.</p>
     *
     *
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }

    /**
     * <p>If <code>true</code>, all email tokens issued previously for the Customer are invalidated.</p>
     *
     *
     * @return null|bool
     */
    public function getInvalidateOlderTokens()
    {
        if (is_null($this->invalidateOlderTokens)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INVALIDATE_OLDER_TOKENS);
            if (is_null($data)) {
                return null;
            }
            $this->invalidateOlderTokens = (bool) $data;
        }

        return $this->invalidateOlderTokens;
    }


    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void
    {
        $this->invalidateOlderTokens = $invalidateOlderTokens;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomerEmailTokenCreatedMessagePayload::FIELD_EXPIRES_AT]) && $data[CustomerEmailTokenCreatedMessagePayload::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[CustomerEmailTokenCreatedMessagePayload::FIELD_EXPIRES_AT] = $data[CustomerEmailTokenCreatedMessagePayload::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
