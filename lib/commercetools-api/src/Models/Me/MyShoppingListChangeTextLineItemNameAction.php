<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;

interface MyShoppingListChangeTextLineItemNameAction extends MyShoppingListUpdateAction
{
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setTextLineItemId(?string $textLineItemId): void;

    public function setName(?LocalizedString $name): void;
}
