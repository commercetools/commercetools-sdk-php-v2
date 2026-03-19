<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CartLockModel extends JsonObjectModel implements CartLock
{
    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?string
     */
    protected $clientId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DateTimeImmutable $createdAt = null,
        ?string $clientId = null
    ) {
        $this->createdAt = $createdAt;
        $this->clientId = $clientId;
    }

    /**
     * <p>Date and time (UTC) the Cart was locked.</p>
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
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> that locked the Cart.</p>
     *
     *
     * @return null|string
     */
    public function getClientId()
    {
        if (is_null($this->clientId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CLIENT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->clientId = (string) $data;
        }

        return $this->clientId;
    }


    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?string $clientId
     */
    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CartLock::FIELD_CREATED_AT]) && $data[CartLock::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[CartLock::FIELD_CREATED_AT] = $data[CartLock::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
