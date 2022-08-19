<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentStatusStateTransitionMessage extends Message
{
    public const FIELD_STATE = 'state';
    public const FIELD_FORCE = 'force';

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Payment">Payment</a> after the <a href="ctp:api:type:PaymentTransitionStateAction">Transition State</a> update action.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Whether <a href="ctp:api:type:State">State</a> transition validations were turned off during the <a href="ctp:api:type:PaymentChangeTransactionStateAction">Change Transaction State</a> update action.</p>
     *

     * @return null|bool
     */
    public function getForce();

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void;
}
