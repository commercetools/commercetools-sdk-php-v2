<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Api\Models\Search\SearchQueryExpressionValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SearchQueryExpressionValueCollection<SearchExactValue>
 * @method SearchExactValue current()
 * @method SearchExactValue end()
 * @method SearchExactValue at($offset)
 */
class SearchExactValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchExactValue $value
     * @psalm-param SearchExactValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchExactValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchExactValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchExactValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchExactValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchExactValue $data */
                $data = SearchExactValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
