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
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|TypedMoney
     */
    public function getMoney();

    /**
     * @return null|CustomLineItemTaxedPrice
     */
    public function getTaxedPrice();

    /**
     * @return null|TypedMoney
     */
    public function getTotalPrice();

    /**
     * @return null|string
     */
    public function getSlug();

    /**
     * @return null|float
     */
    public function getQuantity();

    /**
     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>References a tax category by its key.</p>
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return null|DiscountedLineItemPriceDraftCollection
     */
    public function getDiscountedPricePerQuantity();

    /**
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
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void;

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
