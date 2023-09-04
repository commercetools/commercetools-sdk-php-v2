<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentStatusInterfaceCodeSetMessage extends Message
{
    public const FIELD_INTERFACE_CODE = 'interfaceCode';

    /**
     * <p>The <code>interfaceCode</code> that was set during the <a href="ctp:api:type:PaymentSetStatusInterfaceCodeAction">Set StatusInterfaceCode</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * @param ?string $interfaceCode
     */
    public function setInterfaceCode(?string $interfaceCode): void;
}
