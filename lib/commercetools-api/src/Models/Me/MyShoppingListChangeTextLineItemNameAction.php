<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListChangeTextLineItemNameAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_NAME = 'name';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
