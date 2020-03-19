<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SimilarProductPair>
 * @method SimilarProductPair current()
 * @method SimilarProductPair at($offset)
 */
class SimilarProductPairCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductPair $value
     * @psalm-param SimilarProductPair|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductPairCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductPair) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductPair
     */
    protected function mapper()
    {
        return function (int $index): ?SimilarProductPair {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SimilarProductPairModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
