<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class CustomLineItemReturnItemModel extends JsonObjectModel implements CustomLineItemReturnItem
{
    public const DISCRIMINATOR_VALUE = 'CustomLineItemReturnItem';
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $comment;

    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?string
     */
    protected $customLineItemId;


    public function __construct(
        string $id = null,
        int $quantity = null,
        string $comment = null,
        string $shipmentState = null,
        string $paymentState = null,
        DateTimeImmutable $lastModifiedAt = null,
        DateTimeImmutable $createdAt = null,
        string $customLineItemId = null
    ) {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->comment = $comment;
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->createdAt = $createdAt;
        $this->customLineItemId = $customLineItemId;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReturnItem::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_TYPE);
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
    public function getComment()
    {
        if (is_null($this->comment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->comment = (string) $data;
        }

        return $this->comment;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_LAST_MODIFIED_AT);
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
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReturnItem::FIELD_CREATED_AT);
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
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomLineItemReturnItem::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ReturnItem::FIELD_LAST_MODIFIED_AT]) && $data[ReturnItem::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ReturnItem::FIELD_LAST_MODIFIED_AT] = $data[ReturnItem::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ReturnItem::FIELD_CREATED_AT]) && $data[ReturnItem::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ReturnItem::FIELD_CREATED_AT] = $data[ReturnItem::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }

}
