<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReservationModel extends JsonObjectModel implements Reservation
{

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?Reference
     */
    protected $owner;

    /**
     * @var ?string
     */
    protected $createdAt;

    /**
     * @var ?string
     */
    protected $checkoutStartedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $quantity = null,
        ?Reference $owner = null,
        ?string $createdAt = null,
        ?string $checkoutStartedAt = null
    ) {
        $this->quantity = $quantity;
        $this->owner = $owner;
        $this->createdAt = $createdAt;
        $this->checkoutStartedAt = $checkoutStartedAt;

    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity =  (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|Reference
     */
    public function getOwner()
    {
        if (is_null($this->owner)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OWNER);
            if (is_null($data)) {
                return null;
            }

            $this->owner =  ReferenceModel::of($data);
        }

        return $this->owner;
    }

    /**
     * @return null|string
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $this->createdAt =  (string) $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|string
     */
    public function getCheckoutStartedAt()
    {
        if (is_null($this->checkoutStartedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHECKOUT_STARTED_AT);
            if (is_null($data)) {
                return null;
            }
            $this->checkoutStartedAt =  (string) $data;
        }

        return $this->checkoutStartedAt;
    }


    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?Reference $owner
     */
    public function setOwner(?Reference $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @param ?string $createdAt
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?string $checkoutStartedAt
     */
    public function setCheckoutStartedAt(?string $checkoutStartedAt): void
    {
        $this->checkoutStartedAt = $checkoutStartedAt;
    }



}
