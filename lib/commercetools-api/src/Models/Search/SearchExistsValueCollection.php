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
 * @extends SearchQueryExpressionValueCollection<SearchExistsValue>
 * @method SearchExistsValue current()
 * @method SearchExistsValue end()
 * @method SearchExistsValue at($offset)
 */
class SearchExistsValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchExistsValue $value
     * @psalm-param SearchExistsValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchExistsValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchExistsValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchExistsValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchExistsValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchExistsValue $data */
                $data = SearchExistsValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
