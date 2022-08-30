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
use stdClass;

/**
 * @internal
 */
final class OrderCustomLineItemQuantityChangedMessagePayloadModel extends JsonObjectModel implements OrderCustomLineItemQuantityChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomLineItemQuantityChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?int
     */
    protected $oldQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customLineItemId = null,
        ?int $quantity = null,
        ?int $oldQuantity = null,
        ?string $type = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->quantity = $quantity;
        $this->oldQuantity = $oldQuantity;
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
     * <p>Unique identifier of the <a href="ctp:api:type:CustomLineItem">Custom Line Item</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
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
     * <p><a href="ctp:api:type:CustomLineItem">Custom Line Item</a> quantity before the <a href="ctp:api:type:StagedOrderChangeCustomLineItemQuantityAction">Change Custom Line Item Quantity</a> update action.</p>
     *
     *
     * @return null|int
     */
    public function getOldQuantity()
    {
        if (is_null($this->oldQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_OLD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->oldQuantity = (int) $data;
        }

        return $this->oldQuantity;
    }


    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?int $oldQuantity
     */
    public function setOldQuantity(?int $oldQuantity): void
    {
        $this->oldQuantity = $oldQuantity;
    }
}
