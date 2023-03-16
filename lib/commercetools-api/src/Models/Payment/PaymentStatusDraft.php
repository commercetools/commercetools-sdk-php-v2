<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentStatusDraft extends JsonObject
{
    public const FIELD_INTERFACE_CODE = 'interfaceCode';
    public const FIELD_INTERFACE_TEXT = 'interfaceText';
    public const FIELD_STATE = 'state';

    /**
     * <p>External reference that identifies the current status of the Payment.</p>
     *

     * @return null|string
     */
    public function getInterfaceCode();

    /**
     * <p>Text describing the current status of the Payment.</p>
     *

     * @return null|string
     */
    public function getInterfaceText();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateResourceIdentifier
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
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;
}
