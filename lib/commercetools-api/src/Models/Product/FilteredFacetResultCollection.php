<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\FacetResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends FacetResultCollection<FilteredFacetResult>
 * @method FilteredFacetResult current()
 * @method FilteredFacetResult at($offset)
 */
class FilteredFacetResultCollection extends FacetResultCollection
{
    /**
     * @psalm-assert FilteredFacetResult $value
     * @psalm-param FilteredFacetResult|stdClass $value
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
        return function (?int $index): ?FilteredFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FilteredFacetResult $data */
                $data = FilteredFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
