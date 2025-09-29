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
 * @extends SearchQueryExpressionValueCollection<SearchFuzzyValue>
 * @method SearchFuzzyValue current()
 * @method SearchFuzzyValue end()
 * @method SearchFuzzyValue at($offset)
 */
class SearchFuzzyValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchFuzzyValue $value
     * @psalm-param SearchFuzzyValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFuzzyValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFuzzyValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFuzzyValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFuzzyValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFuzzyValue $data */
                $data = SearchFuzzyValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
