<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleBuyerAssignableChangedMessagePayload extends MessagePayload
{
    public const FIELD_BUYER_ASSIGNABLE = 'buyerAssignable';

    /**
     * <p>The new value of the <code>buyerAssignable</code> field of the AssociateRole.</p>
     *

     * @return null|bool
     */
    public function getBuyerAssignable();

    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void;
}
