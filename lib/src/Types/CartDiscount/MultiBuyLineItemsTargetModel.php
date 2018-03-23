<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetModel;

class MultiBuyLineItemsTargetModel extends CartDiscountTargetModel implements MultiBuyLineItemsTarget {
    const DISCRIMINATOR_VALUE = 'multiBuyLineItems';

    /**
     * @var string
     */
    protected $predicate;
    /**
     * @var int
     */
    protected $triggerQuantity;
    /**
     * @var int
     */
    protected $discountedQuantity;
    /**
     * @var int
     */
    protected $maxOccurrence;
    /**
     * @var string
     */
    protected $selectionMode;

    /**
     * @return string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            $value = $this->raw(MultiBuyLineItemsTarget::FIELD_PREDICATE);
            $value = (string)$value;
            $this->predicate = $value;
        }
        return $this->predicate;
    }
    /**
     * @return int
     */
    public function getTriggerQuantity()
    {
        if (is_null($this->triggerQuantity)) {
            $value = $this->raw(MultiBuyLineItemsTarget::FIELD_TRIGGER_QUANTITY);
            $value = (int)$value;
            $this->triggerQuantity = $value;
        }
        return $this->triggerQuantity;
    }
    /**
     * @return int
     */
    public function getDiscountedQuantity()
    {
        if (is_null($this->discountedQuantity)) {
            $value = $this->raw(MultiBuyLineItemsTarget::FIELD_DISCOUNTED_QUANTITY);
            $value = (int)$value;
            $this->discountedQuantity = $value;
        }
        return $this->discountedQuantity;
    }
    /**
     * @return int
     */
    public function getMaxOccurrence()
    {
        if (is_null($this->maxOccurrence)) {
            $value = $this->raw(MultiBuyLineItemsTarget::FIELD_MAX_OCCURRENCE);
            $value = (int)$value;
            $this->maxOccurrence = $value;
        }
        return $this->maxOccurrence;
    }
    /**
     * @return string
     */
    public function getSelectionMode()
    {
        if (is_null($this->selectionMode)) {
            $value = $this->raw(MultiBuyLineItemsTarget::FIELD_SELECTION_MODE);
            $value = (string)$value;
            $this->selectionMode = $value;
        }
        return $this->selectionMode;
    }

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate)
    {
        $this->predicate = (string)$predicate;

        return $this;
    }
    /**
     * @param int $triggerQuantity
     * @return $this
     */
    public function setTriggerQuantity(int $triggerQuantity)
    {
        $this->triggerQuantity = (int)$triggerQuantity;

        return $this;
    }
    /**
     * @param int $discountedQuantity
     * @return $this
     */
    public function setDiscountedQuantity(int $discountedQuantity)
    {
        $this->discountedQuantity = (int)$discountedQuantity;

        return $this;
    }
    /**
     * @param int $maxOccurrence
     * @return $this
     */
    public function setMaxOccurrence(int $maxOccurrence)
    {
        $this->maxOccurrence = (int)$maxOccurrence;

        return $this;
    }
    /**
     * @param string $selectionMode
     * @return $this
     */
    public function setSelectionMode(string $selectionMode)
    {
        $this->selectionMode = (string)$selectionMode;

        return $this;
    }

}
