<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetLineItemTaxAmountAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';
    const FIELD_LINE_ITEM_ID = 'lineItemId';

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @param ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function setExternalTaxAmount(ExternalTaxAmountDraft $externalTaxAmount);

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

}
