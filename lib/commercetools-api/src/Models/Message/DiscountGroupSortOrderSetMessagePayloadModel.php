<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountGroupSortOrderSetMessagePayloadModel extends JsonObjectModel implements DiscountGroupSortOrderSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DiscountGroupSortOrderSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $sortOrder;

    /**
     *
     * @var ?string
     */
    protected $oldSortOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $sortOrder = null,
        ?string $oldSortOrder = null,
        ?string $type = null
    ) {
        $this->sortOrder = $sortOrder;
        $this->oldSortOrder = $oldSortOrder;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->sortOrder = (string) $data;
        }

        return $this->sortOrder;
    }

    /**
     * <p><code>sortOrder</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetSortOrderAction">Set SortOrder</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldSortOrder()
    {
        if (is_null($this->oldSortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->oldSortOrder = (string) $data;
        }

        return $this->oldSortOrder;
    }


    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @param ?string $oldSortOrder
     */
    public function setOldSortOrder(?string $oldSortOrder): void
    {
        $this->oldSortOrder = $oldSortOrder;
    }
}
