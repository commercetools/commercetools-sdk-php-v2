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
 * @extends SearchQueryExpressionValueCollection<SearchFullTextPrefixValue>
 * @method SearchFullTextPrefixValue current()
 * @method SearchFullTextPrefixValue end()
 * @method SearchFullTextPrefixValue at($offset)
 */
class SearchFullTextPrefixValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchFullTextPrefixValue $value
     * @psalm-param SearchFullTextPrefixValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFullTextPrefixValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFullTextPrefixValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFullTextPrefixValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFullTextPrefixValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFullTextPrefixValue $data */
                $data = SearchFullTextPrefixValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
