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
 * @extends SearchQueryExpressionValueCollection<SearchLongRangeValue>
 * @method SearchLongRangeValue current()
 * @method SearchLongRangeValue end()
 * @method SearchLongRangeValue at($offset)
 */
class SearchLongRangeValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchLongRangeValue $value
     * @psalm-param SearchLongRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchLongRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchLongRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchLongRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchLongRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchLongRangeValue $data */
                $data = SearchLongRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
