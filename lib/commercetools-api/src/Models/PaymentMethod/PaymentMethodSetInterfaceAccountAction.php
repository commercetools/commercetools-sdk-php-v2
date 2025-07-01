<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodSetInterfaceAccountAction extends PaymentMethodUpdateAction
{
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';

    /**
     * <p>New account or instance of the payment interface.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void;
}
