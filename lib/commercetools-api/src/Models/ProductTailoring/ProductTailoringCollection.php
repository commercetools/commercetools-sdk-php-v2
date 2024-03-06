<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ProductTailoring>
 * @method ProductTailoring current()
 * @method ProductTailoring end()
 * @method ProductTailoring at($offset)
 */
class ProductTailoringCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ProductTailoring $value
     * @psalm-param ProductTailoring|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoring) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoring
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoring {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoring $data */
                $data = ProductTailoringModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
