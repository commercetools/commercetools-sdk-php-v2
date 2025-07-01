<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfoInterfaceSetMessagePayload extends MessagePayload
{
    public const FIELD_INTERFACE = 'interface';
    public const FIELD_OLD_INTERFACE = 'oldInterface';

    /**
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterface();

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterface();

    /**
     * @param ?string $interface
     */
    public function setInterface(?string $interface): void;

    /**
     * @param ?string $oldInterface
     */
    public function setOldInterface(?string $oldInterface): void;
}
