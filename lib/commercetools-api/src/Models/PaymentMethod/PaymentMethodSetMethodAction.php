<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodSetMethodAction extends PaymentMethodUpdateAction
{
    public const FIELD_METHOD = 'method';

    /**
     * <p>New payment method—for example, a credit card or cash advance.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;
}
