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
 * @extends SearchQueryExpressionValueCollection<SearchFullTextValue>
 * @method SearchFullTextValue current()
 * @method SearchFullTextValue end()
 * @method SearchFullTextValue at($offset)
 */
class SearchFullTextValueCollection extends SearchQueryExpressionValueCollection
{
    /**
     * @psalm-assert SearchFullTextValue $value
     * @psalm-param SearchFullTextValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFullTextValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFullTextValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFullTextValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFullTextValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFullTextValue $data */
                $data = SearchFullTextValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
