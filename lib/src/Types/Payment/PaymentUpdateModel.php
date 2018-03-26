<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\UpdateModel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

class PaymentUpdateModel extends UpdateModel implements PaymentUpdate {
    /**
     * @var PaymentUpdateActionCollection
     */
    protected $actions;

    /**
     * @return PaymentUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(PaymentUpdate::FIELD_ACTIONS);
            if (is_null($value)) {
                return $this->mapData(PaymentUpdateActionCollection::class, null);
            }
            $value = $this->mapData(PaymentUpdateActionCollection::class, $value);
            $this->actions = $value;
        }
        return $this->actions;
    }

    /**
     * @param UpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
