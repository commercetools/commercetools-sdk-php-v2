<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<FilteredFacetResult>
 *
 * @method FilteredFacetResult current()
 * @method FilteredFacetResult at($offset)
 */
class FilteredFacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert FilteredFacetResult $value
     * @psalm-param FilteredFacetResult|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return FilteredFacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof FilteredFacetResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FilteredFacetResult
     */
    protected function mapper()
    {
        return function (int $index): ?FilteredFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = FilteredFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
