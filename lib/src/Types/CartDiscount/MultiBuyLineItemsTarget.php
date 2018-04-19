<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface MultiBuyLineItemsTarget extends CartDiscountTarget
{
    const FIELD_PREDICATE = 'predicate';
    const FIELD_TRIGGER_QUANTITY = 'triggerQuantity';
    const FIELD_DISCOUNTED_QUANTITY = 'discountedQuantity';
    const FIELD_MAX_OCCURRENCE = 'maxOccurrence';
    const FIELD_SELECTION_MODE = 'selectionMode';

    /**
     * @return string
     */
    public function getPredicate();

    /**
     * @return int
     */
    public function getTriggerQuantity();

    /**
     * @return int
     */
    public function getDiscountedQuantity();

    /**
     * @return int
     */
    public function getMaxOccurrence();

    /**
     * @return string
     */
    public function getSelectionMode();

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate);

    /**
     * @param int $triggerQuantity
     * @return $this
     */
    public function setTriggerQuantity(int $triggerQuantity);

    /**
     * @param int $discountedQuantity
     * @return $this
     */
    public function setDiscountedQuantity(int $discountedQuantity);

    /**
     * @param int $maxOccurrence
     * @return $this
     */
    public function setMaxOccurrence(int $maxOccurrence);

    /**
     * @param string $selectionMode
     * @return $this
     */
    public function setSelectionMode(string $selectionMode);

}
