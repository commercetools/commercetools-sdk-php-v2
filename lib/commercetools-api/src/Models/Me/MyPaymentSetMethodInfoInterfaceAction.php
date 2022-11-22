<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPaymentSetMethodInfoInterfaceAction extends MyPaymentUpdateAction
{
    public const FIELD_INTERFACE = 'interface';

    /**
     * <p>Value to set.
     * Once set, the <code>paymentInterface</code> of the <code>paymentMethodInfo</code> cannot be changed.</p>
     *

     * @return null|string
     */
    public function getInterface();

    /**
     * @param ?string $interface
     */
    public function setInterface(?string $interface): void;
}
