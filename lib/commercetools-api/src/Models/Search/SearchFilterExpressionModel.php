<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchFilterExpressionModel extends JsonObjectModel implements SearchFilterExpression
{
    /**
     *
     * @var ?SearchQueryExpressionCollection
     */
    protected $filter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchQueryExpressionCollection $filter = null
    ) {
        $this->filter = $filter;
    }

    /**
     *
     * @return null|SearchQueryExpressionCollection
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }
            $this->filter = SearchQueryExpressionCollection::fromArray($data);
        }

        return $this->filter;
    }


    /**
     * @param ?SearchQueryExpressionCollection $filter
     */
    public function setFilter(?SearchQueryExpressionCollection $filter): void
    {
        $this->filter = $filter;
    }
}
