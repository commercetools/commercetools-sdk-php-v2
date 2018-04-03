<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetLineItemTaxAmountActionModel extends CartUpdateActionModel implements CartSetLineItemTaxAmountAction {
    const DISCRIMINATOR_VALUE = 'setLineItemTaxAmount';

    /**
     * @var ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;
    /**
     * @var string
     */
    protected $lineItemId;

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            $value = $this->raw(CartSetLineItemTaxAmountAction::FIELD_EXTERNAL_TAX_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxAmountDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxAmountDraft::class, $value);

            $this->externalTaxAmount = $value;
        }
        return $this->externalTaxAmount;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(CartSetLineItemTaxAmountAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }

    /**
     * @param ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function setExternalTaxAmount(ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }
    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId)
    {
        $this->lineItemId = (string)$lineItemId;

        return $this;
    }

}
