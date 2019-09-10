<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\JsonObject;

interface PaymentStatus extends JsonObject
{
    const FIELD_INTERFACE_CODE = 'interfaceCode';
    const FIELD_INTERFACE_TEXT = 'interfaceText';
    const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * @return null|string
     */
    public function getInterfaceText();

    /**
     * @return null|StateReference
     */
    public function getState();

    public function setInterfaceCode(?string $interfaceCode): void;

    public function setInterfaceText(?string $interfaceText): void;

    public function setState(?StateReference $state): void;
}
