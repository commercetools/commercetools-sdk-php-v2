<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartRemoveRecurringPaymentAllocationAction extends CartUpdateAction
{
    public const FIELD_ID = 'id';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:RecurringPaymentAllocation">RecurringPaymentAllocation</a> to remove.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
