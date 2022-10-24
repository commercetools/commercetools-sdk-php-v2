<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CustomerToken>
 */
final class CustomerTokenBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**

     * @var ?string
     */
    private $customerId;

    /**

     * @var ?DateTimeImmutable
     */
    private $expiresAt;

    /**

     * @var ?string
     */
    private $value;

    /**
     * <p>Unique identifier of the token.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Date and time (UTC) the token was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>When the token is created, <code>lastModifiedAt</code> is set to <code>createdAt</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>The <code>id</code> of the Customer.</p>
     *

     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * <p>Date and time (UTC) the token expires.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * <p>Value of the token.</p>
     *

     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
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

    /**
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): CustomerToken
    {
        return new CustomerTokenModel(
            $this->id,
            $this->createdAt,
            $this->lastModifiedAt,
            $this->customerId,
            $this->expiresAt,
            $this->value
        );
    }

    public static function of(): CustomerTokenBuilder
    {
        return new self();
    }
}
