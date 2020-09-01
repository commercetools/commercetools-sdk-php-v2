<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItem extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_MONEY = 'money';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_SLUG = 'slug';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p>The unique ID of this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The name of this CustomLineItem.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The cost to add to the cart.
     * The amount can be negative.</p>
     *
     * @return null|TypedMoney
     */
    public function getMoney();

    /**
     * <p>Set once the <code>taxRate</code> is set.</p>
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>The total price of this custom line item.
     * If custom line item is discounted, then the <code>totalPrice</code> would be the discounted custom line item price multiplied by <code>quantity</code>.
     * Otherwise a total price is just a <code>money</code> multiplied by the <code>quantity</code>.
     * <code>totalPrice</code> may or may not include the taxes: it depends on the taxRate.includedInPrice property.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>A unique String in the cart to identify this CustomLineItem.</p>
     *
     * @return null|string
     */
    public function getSlug();

    /**
     * <p>The amount of a CustomLineItem in the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
     *
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Container for custom line item specific address(es).
     * CustomLineItem fields that can be used in query predicates: <code>slug</code>, <code>name</code>, <code>quantity</code>,
     * <code>money</code>, <code>state</code>, <code>discountedPricePerQuantity</code>.</p>
     *
     * @return null|ItemShippingDetails
     */
    public function getShippingDetails();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?TypedMoney $money
     */
    public function setMoney(?TypedMoney $money): void;

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void;

    /**
     * @param ?TypedMoney $totalPrice
     */
    public function setTotalPrice(?TypedMoney $totalPrice): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?ItemShippingDetails $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetails $shippingDetails): void;
}
