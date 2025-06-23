<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupSortOrderSetMessagePayload>
 */
final class DiscountGroupSortOrderSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sortOrder;

    /**

     * @var ?string
     */
    private $oldSortOrder;

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *

     * @return null|string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldSortOrder()
    {
        return $this->oldSortOrder;
    }

    /**
     * @param ?string $sortOrder
     * @return $this
     */
    public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * @param ?string $oldSortOrder
     * @return $this
     */
    public function withOldSortOrder(?string $oldSortOrder)
    {
        $this->oldSortOrder = $oldSortOrder;

        return $this;
    }


    public function build(): DiscountGroupSortOrderSetMessagePayload
    {
        return new DiscountGroupSortOrderSetMessagePayloadModel(
            $this->sortOrder,
            $this->oldSortOrder
        );
    }

    public static function of(): DiscountGroupSortOrderSetMessagePayloadBuilder
    {
        return new self();
    }
}
