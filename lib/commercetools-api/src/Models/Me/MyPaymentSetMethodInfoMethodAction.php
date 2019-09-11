<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyPaymentSetMethodInfoMethodAction extends MyPaymentUpdateAction
{
    const FIELD_METHOD = 'method';

    /**
     * @return null|string
     */
    public function getMethod();

    public function setMethod(?string $method): void;
}
