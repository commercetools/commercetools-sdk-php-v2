<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetCustomLineItemTaxAmountActionModel extends CartUpdateActionModel implements CartSetCustomLineItemTaxAmountAction
{
    const DISCRIMINATOR_VALUE = 'setCustomLineItemTaxAmount';

    /**
     * @var ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;
    /**
     * @var string
     */
    protected $customLineItemId;

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            $value = $this->raw(CartSetCustomLineItemTaxAmountAction::FIELD_EXTERNAL_TAX_AMOUNT);
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
    public function getCustomLineItemId()
    {
        if (is_null($this->customLineItemId)) {
            $value = $this->raw(CartSetCustomLineItemTaxAmountAction::FIELD_CUSTOM_LINE_ITEM_ID);
            $value = (string)$value;
            $this->customLineItemId = $value;
        }
        return $this->customLineItemId;
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
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId)
    {
        $this->customLineItemId = (string)$customLineItemId;

        return $this;
    }

}
