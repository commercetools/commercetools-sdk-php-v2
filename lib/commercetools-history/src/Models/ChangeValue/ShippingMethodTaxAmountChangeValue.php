<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\TaxRate;
use Commercetools\History\Models\Common\TaxedPrice;

interface ShippingMethodTaxAmountChangeValue extends JsonObject
{

    public const FIELD_TAXED_PRICE = 'taxedPrice';
    public const FIELD_TAX_RATE = 'taxRate';

    /**

     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;
}
