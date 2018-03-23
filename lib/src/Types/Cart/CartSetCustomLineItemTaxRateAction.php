<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetCustomLineItemTaxRateAction extends CartUpdateAction {
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate);

}
