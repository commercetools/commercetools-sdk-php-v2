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
 * @extends MapperSequence<ProductTailoringInStoreDraft>
 * @method ProductTailoringInStoreDraft current()
 * @method ProductTailoringInStoreDraft end()
 * @method ProductTailoringInStoreDraft at($offset)
 */
class ProductTailoringInStoreDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringInStoreDraft $value
     * @psalm-param ProductTailoringInStoreDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringInStoreDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringInStoreDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringInStoreDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringInStoreDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringInStoreDraft $data */
                $data = ProductTailoringInStoreDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
