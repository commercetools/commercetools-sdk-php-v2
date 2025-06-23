<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountGroupSortOrderSetMessagePayload extends MessagePayload
{
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_OLD_SORT_ORDER = 'oldSortOrder';

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldSortOrder();

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;

    /**
     * @param ?string $oldSortOrder
     */
    public function setOldSortOrder(?string $oldSortOrder): void;
}
