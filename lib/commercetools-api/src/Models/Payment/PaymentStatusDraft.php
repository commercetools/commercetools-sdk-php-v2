<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\State\StateResourceIdentifier;

interface PaymentStatusDraft extends JsonObject
{

    public const FIELD_INTERFACE_CODE = 'interfaceCode';
    public const FIELD_INTERFACE_TEXT = 'interfaceText';
    public const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * @return null|string
     */
    public function getInterfaceText();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    public function setInterfaceCode(?string $interfaceCode): void;

    public function setInterfaceText(?string $interfaceText): void;

    public function setState(?StateResourceIdentifier $state): void;
}
