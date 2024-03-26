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
 * @extends SearchQueryExpressionValueCollection<SearchAnyValue>
 * @method SearchAnyValue current()
 * @method SearchAnyValue end()
 * @method SearchAnyValue at($offset)
 */
class SearchAnyValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchAnyValue $value
     * @psalm-param SearchAnyValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchAnyValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchAnyValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchAnyValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchAnyValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchAnyValue $data */
                $data = SearchAnyValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
