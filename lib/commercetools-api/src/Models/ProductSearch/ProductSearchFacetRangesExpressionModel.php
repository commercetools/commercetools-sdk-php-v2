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
final class ProductSearchFacetRangesExpressionModel extends JsonObjectModel implements ProductSearchFacetRangesExpression
{
    /**
     *
     * @var ?ProductSearchFacetRangesValue
     */
    protected $ranges;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFacetRangesValue $ranges = null
    ) {
        $this->ranges = $ranges;
    }

    /**
     * <p>Definition of the ranges facet.</p>
     *
     *
     * @return null|ProductSearchFacetRangesValue
     */
    public function getRanges()
    {
        if (is_null($this->ranges)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGES);
            if (is_null($data)) {
                return null;
            }

            $this->ranges = ProductSearchFacetRangesValueModel::of($data);
        }

        return $this->ranges;
    }


    /**
     * @param ?ProductSearchFacetRangesValue $ranges
     */
    public function setRanges(?ProductSearchFacetRangesValue $ranges): void
    {
        $this->ranges = $ranges;
    }
}
