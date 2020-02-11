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

interface ShoppingListSetTextLineItemDescriptionAction extends ShoppingListUpdateAction
{

    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_DESCRIPTION = 'description';

    /**
     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    public function setTextLineItemId(?string $textLineItemId): void;

    public function setDescription(?LocalizedString $description): void;
}
