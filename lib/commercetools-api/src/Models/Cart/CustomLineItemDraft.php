<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;

interface CustomLineItemDraft extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_MONEY = 'money';
    const FIELD_SLUG = 'slug';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The amount of a CustomLineItemin the cart.
     * Must be a positive integer.</p>
     *
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|Money
     */
    public function getMoney();

    /**
     * @return null|string
     */
    public function getSlug();

    /**
     * <p>The given tax category will be used to select a tax rate when a cart has the TaxMode <code>Platform</code>.</p>
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>An external tax rate can be set if the cart has the <code>External</code> TaxMode.</p>
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Container for custom line item specific address(es).</p>
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    public function setName(?LocalizedString $name): void;

    public function setQuantity(?int $quantity): void;

    public function setMoney(?Money $money): void;

    public function setSlug(?string $slug): void;

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    public function setCustom(?CustomFields $custom): void;

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
