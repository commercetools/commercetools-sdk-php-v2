<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\State\StateReference;

interface PaymentStatus extends JsonObject
{

    public const FIELD_INTERFACE_CODE = 'interfaceCode';
    public const FIELD_INTERFACE_TEXT = 'interfaceText';
    public const FIELD_STATE = 'state';

    /**
     * <p>A code describing the current status returned by the interface that processes the payment.</p>
     *
     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * <p>A text describing the current status returned by the interface that processes the payment.</p>
     *
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
