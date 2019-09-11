<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyPaymentSetMethodInfoInterfaceAction extends MyPaymentUpdateAction
{
    const FIELD_INTERFACE = 'interface';

    /**
     * @return null|string
     */
    public function getInterface();

    public function setInterface(?string $interface): void;
}
