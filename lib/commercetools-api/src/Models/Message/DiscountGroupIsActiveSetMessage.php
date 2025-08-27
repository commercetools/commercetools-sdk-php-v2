<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupIsActiveSetMessage extends Message
{
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_OLD_IS_ACTIVE = 'oldIsActive';

    /**
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldIsActive();

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;

    /**
     * @param ?bool $oldIsActive
     */
    public function setOldIsActive(?bool $oldIsActive): void;
}
