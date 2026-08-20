<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreOrderUrlTemplateSetMessage extends Message
{
    public const FIELD_ORDER_URL_TEMPLATE = 'orderUrlTemplate';

    /**
     * <p>The <code>orderUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetOrderUrlTemplateAction">Set Order Url Template</a> update action.</p>
     *

     * @return null|string
     */
    public function getOrderUrlTemplate();

    /**
     * @param ?string $orderUrlTemplate
     */
    public function setOrderUrlTemplate(?string $orderUrlTemplate): void;
}
