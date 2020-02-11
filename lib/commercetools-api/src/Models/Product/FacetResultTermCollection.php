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
 * @extends MapperSequence<FacetResultTerm>
 * @method FacetResultTerm current()
 * @method FacetResultTerm at($offset)
 */
class FacetResultTermCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetResultTerm $value
     * @psalm-param FacetResultTerm|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FacetResultTermCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetResultTerm) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetResultTerm
     */
    protected function mapper()
    {
        return function (int $index): ?FacetResultTerm {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = FacetResultTermModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
