<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\MethodTaxedPriceCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemDiscountSetMessagePayloadModel extends JsonObjectModel implements OrderLineItemDiscountSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemDiscountSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

    /**
     *
     * @var ?Money
     */
    protected $totalPrice;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     *
     * @var ?MethodTaxedPriceCollection
     */
    protected $taxedPricePortions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        ?Money $totalPrice = null,
        ?TaxedItemPrice $taxedPrice = null,
        ?MethodTaxedPriceCollection $taxedPricePortions = null,
        ?string $type = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->taxedPricePortions = $taxedPricePortions;
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
     * <p>Unique identifier for the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
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
     * <p>Array of <a href="ctp:api:type:DiscountedLineItemPriceForQuantity">DiscountedLineItemPriceForQuantity</a> after the Discount recalculation.</p>
     *
     *
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
        }

        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Total Price of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *
     *
     * @return null|Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->totalPrice = MoneyModel::of($data);
        }

        return $this->totalPrice;
    }

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Taxed price of the Shipping Methods in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>..</p>
     *
     *
     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions()
    {
        if (is_null($this->taxedPricePortions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->taxedPricePortions = MethodTaxedPriceCollection::fromArray($data);
        }

        return $this->taxedPricePortions;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }

    /**
     * @param ?Money $totalPrice
     */
    public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     */
    public function setTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions): void
    {
        $this->taxedPricePortions = $taxedPricePortions;
    }
}
