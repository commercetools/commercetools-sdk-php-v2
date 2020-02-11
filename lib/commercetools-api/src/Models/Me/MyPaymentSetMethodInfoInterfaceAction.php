<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyPaymentSetMethodInfoInterfaceAction extends MyPaymentUpdateAction
{

    public const FIELD_INTERFACE = 'interface';

    /**
     * @return null|string
     */
    public function getInterface();

    public function setInterface(?string $interface): void;
}
