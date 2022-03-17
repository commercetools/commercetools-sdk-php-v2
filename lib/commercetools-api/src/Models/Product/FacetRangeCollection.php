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
 * @extends MapperSequence<FacetRange>
 * @method FacetRange current()
 * @method FacetRange end()
 * @method FacetRange at($offset)
 */
class FacetRangeCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetRange $value
     * @psalm-param FacetRange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FacetRangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetRange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetRange
     */
    protected function mapper()
    {
        return function (?int $index): ?FacetRange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FacetRange $data */
                $data = FacetRangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
