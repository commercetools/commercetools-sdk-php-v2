<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodInfoInterfaceAccountSetMessagePayload extends MessagePayload
{
    public const FIELD_INTERFACE_ACCOUNT = 'interfaceAccount';
    public const FIELD_OLD_INTERFACE_ACCOUNT = 'oldInterfaceAccount';

    /**
     * <p>Interface account of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount();

    /**
     * <p>Interface account of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceAccount();

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void;

    /**
     * @param ?string $oldInterfaceAccount
     */
    public function setOldInterfaceAccount(?string $oldInterfaceAccount): void;
}
