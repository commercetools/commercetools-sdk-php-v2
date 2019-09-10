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
 * @extends MapperSequence<ProductChangeAssetOrderAction>
 *
 * @method ProductChangeAssetOrderAction current()
 * @method ProductChangeAssetOrderAction at($offset)
 */
class ProductChangeAssetOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangeAssetOrderAction $value
     * @psalm-param ProductChangeAssetOrderAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
