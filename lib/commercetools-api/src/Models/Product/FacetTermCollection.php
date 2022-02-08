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
 * @extends MapperSequence<FacetTerm>
 * @method FacetTerm current()
 * @method FacetTerm end()
 * @method FacetTerm at($offset)
 */
class FacetTermCollection extends MapperSequence
{
    /**
     * @psalm-assert FacetTerm $value
     * @psalm-param FacetTerm|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FacetTermCollection
     */
    public function add($value)
    {
        if (!$value instanceof FacetTerm) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FacetTerm
     */
    protected function mapper()
    {
        return function (?int $index): ?FacetTerm {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FacetTerm $data */
                $data = FacetTermModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
