<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetCustomLineItemTaxAmountAction extends CartUpdateAction {
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @param ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function setExternalTaxAmount(ExternalTaxAmountDraft $externalTaxAmount);

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

}
