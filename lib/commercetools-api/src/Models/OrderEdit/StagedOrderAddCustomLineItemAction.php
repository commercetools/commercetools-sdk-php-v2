<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\RecurringOrder\CustomLineItemRecurrenceInfoDraft;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderAddCustomLineItemAction extends StagedOrderUpdateAction
{
    public const FIELD_MONEY = 'money';
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SLUG = 'slug';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_RECURRENCE_INFO = 'recurrenceInfo';

    /**
     * <p>Money value of the Custom Line Item. The value can be negative.</p>
     *

     * @return null|Money
     */
    public function getMoney();

    /**
     * <p>Name of the Custom Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier of the Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Number of Custom Line Items to add to the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item. It must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|string
     */
    public function getSlug();

    /**
     * <p>Used to select a Tax Rate when a Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.
     * If <a href="ctp:api:type:TaxMode">TaxMode</a> is <code>Platform</code>, this field must not be empty.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>An external Tax Rate can be set if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>Container for Custom Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * <ul>
     * <li>If <code>Standard</code>, Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a>, <a href="ctp:api:type:MultiBuyCustomLineItemsTarget">MultiBuyCustomLineItemsTarget</a>, or <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> are applied to the Custom Line Item.</li>
     * <li>If <code>External</code>, Cart Discounts are not considered on the Custom Line Item.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * <p>Custom Fields for the Custom Line Item.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Recurring Order and frequency data.</p>
     *

     * @return null|CustomLineItemRecurrenceInfoDraft
     */
    public function getRecurrenceInfo();

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?CustomLineItemRecurrenceInfoDraft $recurrenceInfo
     */
    public function setRecurrenceInfo(?CustomLineItemRecurrenceInfoDraft $recurrenceInfo): void;
}
