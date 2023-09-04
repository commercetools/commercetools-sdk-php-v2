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

interface MyShoppingListSetTextLineItemDescriptionAction extends MyShoppingListUpdateAction
{
    public const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    public const FIELD_TEXT_LINE_ITEM_KEY = 'textLineItemKey';
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId();

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getTextLineItemKey();

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void;

    /**
     * @param ?string $textLineItemKey
     */
    public function setTextLineItemKey(?string $textLineItemKey): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;
}
