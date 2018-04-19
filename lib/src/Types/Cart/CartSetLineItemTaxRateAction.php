<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetLineItemTaxRateAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

}
