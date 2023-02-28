<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartChangeCustomLineItemPriceModeAction extends CartUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_MODE = 'mode';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|string
     */
    public function getMode();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void;
}
