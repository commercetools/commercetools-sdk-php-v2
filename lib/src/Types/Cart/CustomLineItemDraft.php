<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\Money;

interface CustomLineItemDraft extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_MONEY = 'money';
    const FIELD_SLUG = 'slug';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return Money
     */
    public function getMoney();

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param Money $money
     * @return $this
     */
    public function setMoney(Money $money);

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

}
