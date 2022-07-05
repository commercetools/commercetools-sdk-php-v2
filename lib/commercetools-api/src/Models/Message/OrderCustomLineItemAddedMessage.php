<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\CustomLineItem;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderCustomLineItemAddedMessage extends OrderMessage
{
    public const FIELD_CUSTOM_LINE_ITEM = 'customLineItem';

    /**
     * @return null|CustomLineItem
     */
    public function getCustomLineItem();

    /**
     * @param ?CustomLineItem $customLineItem
     */
    public function setCustomLineItem(?CustomLineItem $customLineItem): void;
}
