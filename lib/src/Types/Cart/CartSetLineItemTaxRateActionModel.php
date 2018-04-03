<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetLineItemTaxRateActionModel extends CartUpdateActionModel implements CartSetLineItemTaxRateAction {
    const DISCRIMINATOR_VALUE = 'setLineItemTaxRate';

    /**
     * @var ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    /**
     * @var string
     */
    protected $lineItemId;

    /**
     * @return ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            $value = $this->raw(CartSetLineItemTaxRateAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxRateDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxRateDraft::class, $value);

            $this->externalTaxRate = $value;
        }
        return $this->externalTaxRate;
    }
    /**
     * @return string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            $value = $this->raw(CartSetLineItemTaxRateAction::FIELD_LINE_ITEM_ID);
            $value = (string)$value;
            $this->lineItemId = $value;
        }
        return $this->lineItemId;
    }

    /**
     * @param ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function setExternalTaxRate(ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

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
