<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShoppingListSetTextLineItemDescriptionAction extends ShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_DESCRIPTION = 'description';

    /**

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;
}
