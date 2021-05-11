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
 * @template T of FacetResult
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method FacetResult current()
 * @method FacetResult at($offset)
 */
class FacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?FacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = FacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
