<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderImportLineItemStateAction extends OrderUpdateAction {
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getLineItemId();

    /**
     * @return ItemStateCollection
     */
    public function getState();

    /**
     * @param string $lineItemId
     * @return $this
     */
    public function setLineItemId(string $lineItemId);

    /**
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state);

}
