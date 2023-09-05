<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
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
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_MONEY = 'money';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAXED_PRICE_PORTIONS = 'taxedPricePortions';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_SLUG = 'slug';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_PER_METHOD_TAX_RATE = 'perMethodTaxRate';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_PRICE_MODE = 'priceMode';

    /**
     * <p>Unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Custom Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Money value of the Custom Line Item.</p>
     *

     * @return null|TypedMoney
     */
    public function getMoney();

    /**
     * <p>Automatically set after the <code>taxRate</code> is set.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Taxed price of the Shipping Method that is automatically set after <code>perMethodTaxRate</code> is set.</p>
     *

     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions();

    /**
     * <p>Total price of the Custom Line Item (<code>money</code> multiplied by <code>quantity</code>).
     * If the Custom Line Item is discounted, the total price is <code>discountedPricePerQuantity</code> multiplied by <code>quantity</code>.</p>
     * <p>Includes taxes if the <a href="ctp:api:type:TaxRate">TaxRate</a> <code>includedInPrice</code> is <code>true</code>.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getTotalPrice();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item.
     * It matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|string
     */
    public function getSlug();

    /**
     * <p>Number of Custom Line Items in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>State of the Custom Line Item in the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Used to select a Tax Rate when a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <ul>
     * <li>For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the <code>taxRate</code> of Custom Line Items is set automatically once a shipping address is set. The rate is based on the <a href="ctp:api:type:TaxCategory">TaxCategory</a> that applies for the shipping address.</li>
     * <li>For a Cart with <code>External</code> TaxMode, the <code>taxRate</code> of Custom Line Items can be set using <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</li>
     * </ul>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Tax Rate per Shipping Method for a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>. For a Cart with <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a> it is automatically set after the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.
     * For a Cart with <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>, the Tax Rate must be set with <a href="ctp:api:type:ExternalTaxRateDraft">ExternalTaxRateDraft</a>.</p>
     *

     * @return null|MethodTaxRateCollection
     */
    public function getPerMethodTaxRate();

    /**
     * <p>Discounted price of a single quantity of the Custom Line Item.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * <p>Custom Fields of the Custom Line Item.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Container for Custom Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getShippingDetails();

    /**
     * <p>Indicates whether Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a> are applied to the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     */
    public function setTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions): void;

    /**
     * @param ?CentPrecisionMoney $totalPrice
     */
    public function setTotalPrice(?CentPrecisionMoney $totalPrice): void;

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
     * @param ?MethodTaxRateCollection $perMethodTaxRate
     */
    public function setPerMethodTaxRate(?MethodTaxRateCollection $perMethodTaxRate): void;

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

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
