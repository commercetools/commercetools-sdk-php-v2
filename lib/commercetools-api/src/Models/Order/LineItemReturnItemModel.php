<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class LineItemReturnItemModel extends JsonObjectModel implements LineItemReturnItem
{
    public const DISCRIMINATOR_VALUE = 'LineItemReturnItem';
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $comment;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @var ?CustomFields
     */
    protected $custom;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null,
        ?int $quantity = null,
        ?string $comment = null,
        ?string $shipmentState = null,
        ?string $paymentState = null,
        ?CustomFields $custom = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?DateTimeImmutable $createdAt = null,
        ?string $lineItemId = null,
        ?string $type = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->quantity = $quantity;
        $this->comment = $comment;
        $this->shipmentState = $shipmentState;
        $this->paymentState = $paymentState;
        $this->custom = $custom;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->createdAt = $createdAt;
        $this->lineItemId = $lineItemId;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Unique identifier of the Return Item.</p>
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
     * <p>User-defined unique identifier of the LineItemReturnItem.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Number of Line Items returned.</p>
     *
     *
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
            $this->quantity = (int) $data;
        }

        return $this->quantity;
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
     * <p>User-defined description for the return.</p>
     *
     *
     * @return null|string
     */
    public function getComment()
    {
        if (is_null($this->comment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->comment = (string) $data;
        }

        return $this->comment;
    }

    /**
     * <p>Shipment status of the Return Item.</p>
     *
     *
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * <p>Payment status of the Return Item:</p>
     * <ul>
     * <li><code>NonRefundable</code>, for items in the <code>Advised</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * <li><code>Initial</code>, for items in the <code>Returned</code> <a href="ctp:api:type:ReturnShipmentState">ReturnShipmentState</a></li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * <p>Custom Fields of the Return Item.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Date and time (UTC) the Return Item was last updated.</p>
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
     * <p>Date and time (UTC) the Return Item was intitially created.</p>
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
     * <p><code>id</code> of the returned <a href="ctp:api:type:LineItem">LineItem</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }


    #[\ReturnTypeWillChange]
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
