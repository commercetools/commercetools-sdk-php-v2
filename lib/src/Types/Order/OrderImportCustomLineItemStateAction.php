<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderImportCustomLineItemStateAction extends OrderUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_STATE = 'state';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @return ItemStateCollection
     */
    public function getState();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

    /**
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state);

}
