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
final class ProductSearchFacetDistinctExpressionModel extends JsonObjectModel implements ProductSearchFacetDistinctExpression
{
    /**
     *
     * @var ?ProductSearchFacetDistinctValue
     */
    protected $distinct;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFacetDistinctValue $distinct = null
    ) {
        $this->distinct = $distinct;
    }

    /**
     * <p>Definition of the distinct facet.</p>
     *
     *
     * @return null|ProductSearchFacetDistinctValue
     */
    public function getDistinct()
    {
        if (is_null($this->distinct)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTINCT);
            if (is_null($data)) {
                return null;
            }

            $this->distinct = ProductSearchFacetDistinctValueModel::of($data);
        }

        return $this->distinct;
    }


    /**
     * @param ?ProductSearchFacetDistinctValue $distinct
     */
    public function setDistinct(?ProductSearchFacetDistinctValue $distinct): void
    {
        $this->distinct = $distinct;
    }
}
