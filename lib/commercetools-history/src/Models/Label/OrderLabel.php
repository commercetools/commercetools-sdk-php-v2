<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderLabel extends Label
{

    public const FIELD_CUSTOMER_EMAIL = 'customerEmail';
    public const FIELD_ORDER_NUMBER = 'orderNumber';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getCustomerEmail();

    /**
     * @return null|string
     */
    public function getOrderNumber();

    /**
     * @param ?string $customerEmail
     */
    public function setCustomerEmail(?string $customerEmail): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;
}
