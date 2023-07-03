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
     * <p>Taxed price for the Shipping Method based on <code>taxRate</code>.</p>
     *

     * @return null|TaxedPrice
     */
    public function getTaxedPrice();

    /**
     * <p>Tax rate set externally for the Shipping Method.</p>
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
