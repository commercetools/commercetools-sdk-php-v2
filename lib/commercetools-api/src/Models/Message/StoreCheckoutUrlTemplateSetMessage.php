<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreCheckoutUrlTemplateSetMessage extends Message
{
    public const FIELD_CHECKOUT_URL_TEMPLATE = 'checkoutUrlTemplate';

    /**
     * <p>The <code>checkoutUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCheckoutUrlTemplateAction">Set Checkout Url Template</a> update action.</p>
     *

     * @return null|string
     */
    public function getCheckoutUrlTemplate();

    /**
     * @param ?string $checkoutUrlTemplate
     */
    public function setCheckoutUrlTemplate(?string $checkoutUrlTemplate): void;
}
