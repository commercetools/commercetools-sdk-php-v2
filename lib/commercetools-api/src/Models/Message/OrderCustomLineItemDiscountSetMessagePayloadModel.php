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
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderCustomLineItemDiscountSetMessagePayloadModel extends JsonObjectModel implements OrderCustomLineItemDiscountSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCustomLineItemDiscountSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    public function __construct(
        string $customLineItemId = null,
        DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        TaxedItemPrice $taxedPrice = null
    ) {
        $this->customLineItemId = $customLineItemId;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
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
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderCustomLineItemDiscountSetMessagePayload::FIELD_CUSTOM_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customLineItemId = (string) $data;
        }

        return $this->customLineItemId;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(OrderCustomLineItemDiscountSetMessagePayload::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
        }

        return $this->discountedPricePerQuantity;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomLineItemDiscountSetMessagePayload::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }

    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
}
