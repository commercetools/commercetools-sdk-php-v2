<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SearchSorting>
 * @method SearchSorting current()
 * @method SearchSorting end()
 * @method SearchSorting at($offset)
 */
class SearchSortingCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchSorting $value
     * @psalm-param SearchSorting|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchSortingCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchSorting) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchSorting
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchSorting {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchSorting $data */
                $data = SearchSortingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
