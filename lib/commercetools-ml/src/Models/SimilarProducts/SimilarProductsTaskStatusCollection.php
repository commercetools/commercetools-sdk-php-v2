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
 * @extends MapperSequence<SimilarProductsTaskStatus>
 * @method SimilarProductsTaskStatus current()
 * @method SimilarProductsTaskStatus at($offset)
 */
class SimilarProductsTaskStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert SimilarProductsTaskStatus $value
     * @psalm-param SimilarProductsTaskStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SimilarProductsTaskStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof SimilarProductsTaskStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SimilarProductsTaskStatus
     */
    protected function mapper()
    {
        return function (int $index): ?SimilarProductsTaskStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SimilarProductsTaskStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
