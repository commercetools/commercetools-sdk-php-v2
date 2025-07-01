<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentInterfaceIdSetMessagePayload extends MessagePayload
{
    public const FIELD_INTERFACE_ID = 'interfaceId';
    public const FIELD_OLD_INTERFACE_ID = 'oldInterfaceId';

    /**
     * <p>Interface ID of the Payment after the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * <p>Interface ID of the Payment before the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceId();

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;

    /**
     * @param ?string $oldInterfaceId
     */
    public function setOldInterfaceId(?string $oldInterfaceId): void;
}
