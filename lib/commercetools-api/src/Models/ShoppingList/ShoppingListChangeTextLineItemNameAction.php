<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface ShoppingListChangeTextLineItemNameAction extends ShoppingListUpdateAction
{

    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_NAME = 'name';

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
