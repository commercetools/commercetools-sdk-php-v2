<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartRemoveCustomLineItemAction extends CartUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';

    /**
     * @return string
     */
    public function getCustomLineItemId();

    /**
     * @param string $customLineItemId
     * @return $this
     */
    public function setCustomLineItemId(string $customLineItemId);

}
