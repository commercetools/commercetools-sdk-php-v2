<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderLineItemDiscountSetMessagePayloadModel extends JsonObjectModel implements OrderLineItemDiscountSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderLineItemDiscountSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $lineItemId;

    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     * @var ?Money
     */
    protected $totalPrice;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    public function __construct(
        string $lineItemId = null,
        DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        Money $totalPrice = null,
        TaxedItemPrice $taxedPrice = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
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
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
        }

        return $this->discountedPricePerQuantity;
    }

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = MoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }

    public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
}
