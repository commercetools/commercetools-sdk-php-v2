<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShoppingList\ShoppingListUpdateActionModel;

class ShoppingListSetDeleteDaysAfterLastModificationActionModel extends ShoppingListUpdateActionModel implements ShoppingListSetDeleteDaysAfterLastModificationAction
{
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
            $value = $this->raw(ShoppingListSetDeleteDaysAfterLastModificationAction::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
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
