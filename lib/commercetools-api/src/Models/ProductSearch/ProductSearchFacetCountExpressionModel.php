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
final class ProductSearchFacetCountExpressionModel extends JsonObjectModel implements ProductSearchFacetCountExpression
{
    /**
     *
     * @var ?ProductSearchFacetCountValue
     */
    protected $count;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFacetCountValue $count = null
    ) {
        $this->count = $count;
    }

    /**
     * <p>Definition of the count facet.</p>
     *
     *
     * @return null|ProductSearchFacetCountValue
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }

            $this->count = ProductSearchFacetCountValueModel::of($data);
        }

        return $this->count;
    }


    /**
     * @param ?ProductSearchFacetCountValue $count
     */
    public function setCount(?ProductSearchFacetCountValue $count): void
    {
        $this->count = $count;
    }
}
