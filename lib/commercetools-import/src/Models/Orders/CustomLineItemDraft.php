<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Prices\TaxRate;

interface CustomLineItemDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_MONEY = 'money';
    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TOTAL_PRICE = 'totalPrice';
    public const FIELD_SLUG = 'slug';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_DISCOUNTED_PRICE_PER_QUANTITY = 'discountedPricePerQuantity';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p>Maps to <code>CustomLineItem.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>CustomLineItem.money</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getMoney();

    /**
     * <p>Maps to <code>CustomLineItem.taxedPrice</code>.</p>
     *

     * @return null|CustomLineItemTaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Maps to <code>CustomLineItem.totalPrice</code>.</p>
     *

     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * <p>Maps to <code>CustomLineItem.slug</code>.</p>
     *

     * @return null|string
     */
    public function getSlug();

    /**
     * <p>Maps to <code>CustomLineItem.quantity</code>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Maps to <code>CustomLineItem.state</code>.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Maps to <code>CustomLineItem.taxCategory</code>. References a tax category by key. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * <p>Maps to <code>CustomLineItem.taxRate</code>.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>External Tax Rate for the Custom Line Item if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Maps to <code>CustomLineItem.discountedPricePerQuantity</code>.</p>
     *

     * @return null|DiscountedLineItemPriceDraftCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
     * <p>Maps to <code>CustomLineItem.shippingDetails</code>.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?TypedMoney $money
     */
    public function setMoney(?TypedMoney $money): void;

    /**
     * @param ?CustomLineItemTaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?CustomLineItemTaxedPrice $taxedPrice): void;

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
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity
     */
    public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceDraftCollection $discountedPricePerQuantity): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
