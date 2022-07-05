<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItemImportDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MONEY = 'money';
    public const FIELD_SLUG = 'slug';
    public const FIELD_STATE = 'state';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The amount of a CustomLineItem in the cart.
     * Must be a positive integer.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>The cost to add to the cart. The amount can be negative.</p>
     *

     * @return null|Money
     */
    public function getMoney();

    /**

     * @return null|string
     */
    public function getSlug();

    /**

     * @return null|ItemStateCollection
     */
    public function getState();

    /**

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>The custom fields.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
