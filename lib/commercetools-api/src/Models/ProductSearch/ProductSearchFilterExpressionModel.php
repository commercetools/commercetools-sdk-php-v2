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
final class ProductSearchFilterExpressionModel extends JsonObjectModel implements ProductSearchFilterExpression
{
    /**
     *
     * @var ?ProductSearchQueryExpressionCollection
     */
    protected $filter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchQueryExpressionCollection $filter = null
    ) {
        $this->filter = $filter;
    }

    /**
     *
     * @return null|ProductSearchQueryExpressionCollection
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }
            $this->filter = ProductSearchQueryExpressionCollection::fromArray($data);
        }

        return $this->filter;
    }


    /**
     * @param ?ProductSearchQueryExpressionCollection $filter
     */
    public function setFilter(?ProductSearchQueryExpressionCollection $filter): void
    {
        $this->filter = $filter;
    }
}
