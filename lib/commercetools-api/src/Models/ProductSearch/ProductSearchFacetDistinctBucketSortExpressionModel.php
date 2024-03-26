<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetDistinctBucketSortExpressionModel extends JsonObjectModel implements ProductSearchFacetDistinctBucketSortExpression
{
    /**
     *
     * @var ?string
     */
    protected $by;

    /**
     *
     * @var ?string
     */
    protected $order;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $by = null,
        ?string $order = null
    ) {
        $this->by = $by;
        $this->order = $order;
    }

    /**
     * <p>Defines whether to sort by bucket count or key.</p>
     *
     *
     * @return null|string
     */
    public function getBy()
    {
        if (is_null($this->by)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_BY);
            if (is_null($data)) {
                return null;
            }
            $this->by = (string) $data;
        }

        return $this->by;
    }

    /**
     * <p>Defines the sorting order.</p>
     *
     *
     * @return null|string
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->order = (string) $data;
        }

        return $this->order;
    }


    /**
     * @param ?string $by
     */
    public function setBy(?string $by): void
    {
        $this->by = $by;
    }

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }
}
