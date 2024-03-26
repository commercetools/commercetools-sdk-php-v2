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
 * @extends SearchQueryExpressionValueCollection<SearchTimeRangeValue>
 * @method SearchTimeRangeValue current()
 * @method SearchTimeRangeValue end()
 * @method SearchTimeRangeValue at($offset)
 */
class SearchTimeRangeValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchTimeRangeValue $value
     * @psalm-param SearchTimeRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchTimeRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchTimeRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchTimeRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchTimeRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchTimeRangeValue $data */
                $data = SearchTimeRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
