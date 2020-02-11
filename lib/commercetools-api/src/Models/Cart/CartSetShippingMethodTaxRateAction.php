<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartSetShippingMethodTaxRateAction extends CartUpdateAction
{

    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
