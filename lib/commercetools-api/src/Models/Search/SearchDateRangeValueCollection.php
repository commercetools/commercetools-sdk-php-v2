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
 * @extends SearchQueryExpressionValueCollection<SearchDateRangeValue>
 * @method SearchDateRangeValue current()
 * @method SearchDateRangeValue end()
 * @method SearchDateRangeValue at($offset)
 */
class SearchDateRangeValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchDateRangeValue $value
     * @psalm-param SearchDateRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchDateRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchDateRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchDateRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchDateRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchDateRangeValue $data */
                $data = SearchDateRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
