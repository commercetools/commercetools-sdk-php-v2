<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetDeleteDaysAfterLastModificationActionModel extends CartUpdateActionModel implements CartSetDeleteDaysAfterLastModificationAction {
    const DISCRIMINATOR_VALUE = 'setDeleteDaysAfterLastModification';

    /**
     * @var int
     */
    protected $deleteDaysAfterLastModification;

    /**
     * @return int
     */
    public function getDeleteDaysAfterLastModification()
    {
        if (is_null($this->deleteDaysAfterLastModification)) {
            $value = $this->raw(CartSetDeleteDaysAfterLastModificationAction::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
            $value = (int)$value;
            $this->deleteDaysAfterLastModification = $value;
        }
        return $this->deleteDaysAfterLastModification;
    }

    /**
     * @param int $deleteDaysAfterLastModification
     * @return $this
     */
    public function setDeleteDaysAfterLastModification(int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = (int)$deleteDaysAfterLastModification;

        return $this;
    }

}
