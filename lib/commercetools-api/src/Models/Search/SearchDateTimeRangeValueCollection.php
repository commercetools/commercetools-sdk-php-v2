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
 * @extends SearchQueryExpressionValueCollection<SearchDateTimeRangeValue>
 * @method SearchDateTimeRangeValue current()
 * @method SearchDateTimeRangeValue end()
 * @method SearchDateTimeRangeValue at($offset)
 */
class SearchDateTimeRangeValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchDateTimeRangeValue $value
     * @psalm-param SearchDateTimeRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchDateTimeRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchDateTimeRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchDateTimeRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchDateTimeRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchDateTimeRangeValue $data */
                $data = SearchDateTimeRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
