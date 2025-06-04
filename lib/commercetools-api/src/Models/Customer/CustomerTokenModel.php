<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CustomerTokenModel extends JsonObjectModel implements CustomerToken
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $customerId;

    /**
     *
     * @var ?string
     */
    protected $value;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $expiresAt;

    /**
     *
     * @var ?bool
     */
    protected $invalidateOlderTokens;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $customerId = null,
        ?string $value = null,
        ?DateTimeImmutable $expiresAt = null,
        ?bool $invalidateOlderTokens = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null
    ) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->value = $value;
        $this->expiresAt = $expiresAt;
        $this->invalidateOlderTokens = $invalidateOlderTokens;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * <p>Unique identifier of the token.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The <code>id</code> of the Customer.</p>
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
     * <p>Value of the token.</p>
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
     * <p>Date and time (UTC) the token expires.</p>
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
     * <p>If <code>true</code>, all tokens issued previously for the Customer will be invalidated.</p>
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
     * <p>Date and time (UTC) the token was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>When the token is created, <code>lastModifiedAt</code> is set to <code>createdAt</code>.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?DateTimeImmutable $expiresAt
     */
    public function setExpiresAt(?DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @param ?bool $invalidateOlderTokens
     */
    public function setInvalidateOlderTokens(?bool $invalidateOlderTokens): void
    {
        $this->invalidateOlderTokens = $invalidateOlderTokens;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CustomerToken::FIELD_EXPIRES_AT]) && $data[CustomerToken::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_EXPIRES_AT] = $data[CustomerToken::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CustomerToken::FIELD_CREATED_AT]) && $data[CustomerToken::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_CREATED_AT] = $data[CustomerToken::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[CustomerToken::FIELD_LAST_MODIFIED_AT]) && $data[CustomerToken::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_LAST_MODIFIED_AT] = $data[CustomerToken::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
