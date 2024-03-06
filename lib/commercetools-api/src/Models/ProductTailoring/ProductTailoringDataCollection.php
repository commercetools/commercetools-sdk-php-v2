<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTailoringData>
 * @method ProductTailoringData current()
 * @method ProductTailoringData end()
 * @method ProductTailoringData at($offset)
 */
class ProductTailoringDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringData $value
     * @psalm-param ProductTailoringData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringData
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringData $data */
                $data = ProductTailoringDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
