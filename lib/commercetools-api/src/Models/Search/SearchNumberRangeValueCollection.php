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
 * @extends SearchQueryExpressionValueCollection<SearchNumberRangeValue>
 * @method SearchNumberRangeValue current()
 * @method SearchNumberRangeValue end()
 * @method SearchNumberRangeValue at($offset)
 */
class SearchNumberRangeValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchNumberRangeValue $value
     * @psalm-param SearchNumberRangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchNumberRangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchNumberRangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchNumberRangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchNumberRangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchNumberRangeValue $data */
                $data = SearchNumberRangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
