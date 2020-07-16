<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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

    /**
     * @param ?string $interfaceCode
     */
    public function setInterfaceCode(?string $interfaceCode): void;

    /**
     * @param ?string $interfaceText
     */
    public function setInterfaceText(?string $interfaceText): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;
}
