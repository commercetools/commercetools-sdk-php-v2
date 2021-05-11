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
 * @extends MapperSequence<SimilarProduct>
 * @method SimilarProduct current()
 * @method SimilarProduct at($offset)
 */
class SimilarProductCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProduct $value
     * @psalm-param SimilarProduct|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProduct) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProduct
     */
    protected function mapper()
    {
        return function (int $index): ?SimilarProduct {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SimilarProduct $data */
                $data = SimilarProductModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
