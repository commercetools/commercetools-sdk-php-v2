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
 * @extends MapperSequence<FacetResult>
 *
 * @method FacetResult current()
 * @method FacetResult at($offset)
 */
class FacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetResult $value
     * @psalm-param FacetResult|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return FacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetResult
     */
    protected function mapper()
    {
        return function (int $index): ?FacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = FacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
