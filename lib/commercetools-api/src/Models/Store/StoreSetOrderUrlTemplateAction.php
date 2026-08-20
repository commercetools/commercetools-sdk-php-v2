<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetOrderUrlTemplateAction extends StoreUpdateAction
{
    public const FIELD_ORDER_URL_TEMPLATE = 'orderUrlTemplate';

    /**
     * <p>Value to set. Must be an <a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template containing the <code>orderId</code> variable.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getOrderUrlTemplate();

    /**
     * @param ?string $orderUrlTemplate
     */
    public function setOrderUrlTemplate(?string $orderUrlTemplate): void;
}
