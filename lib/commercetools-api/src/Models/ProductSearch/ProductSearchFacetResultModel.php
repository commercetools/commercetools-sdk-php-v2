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
final class ProductSearchFacetResultModel extends JsonObjectModel implements ProductSearchFacetResult
{
    /**
     *
     * @var ?ProductSearchFacetResultExpressionCollection
     */
    protected $results;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFacetResultExpressionCollection $results = null
    ) {
        $this->results = $results;
    }

    /**
     * <p>Results of the facets.</p>
     *
     *
     * @return null|ProductSearchFacetResultExpressionCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ProductSearchFacetResultExpressionCollection::fromArray($data);
        }

        return $this->results;
    }


    /**
     * @param ?ProductSearchFacetResultExpressionCollection $results
     */
    public function setResults(?ProductSearchFacetResultExpressionCollection $results): void
    {
        $this->results = $results;
    }
}
