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
 * @extends MapperSequence<FacetResultRange>
 * @method FacetResultRange current()
 * @method FacetResultRange at($offset)
 */
class FacetResultRangeCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetResultRange $value
     * @psalm-param FacetResultRange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FacetResultRangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetResultRange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetResultRange
     */
    protected function mapper()
    {
        return function (int $index): ?FacetResultRange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FacetResultRange $data */
                $data = FacetResultRangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
