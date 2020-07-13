<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetStatusInterfaceTextAction extends PaymentUpdateAction
{
    public const FIELD_INTERFACE_TEXT = 'interfaceText';

    /**
     * @return null|string
     */
    public function getInterfaceText();

    /**
     * @param ?string $interfaceText
     */
    public function setInterfaceText(?string $interfaceText): void;
}
