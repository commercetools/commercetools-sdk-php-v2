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
 * @extends MapperSequence<ProductSetAssetCustomTypeAction>
 * @method ProductSetAssetCustomTypeAction current()
 * @method ProductSetAssetCustomTypeAction at($offset)
 */
class ProductSetAssetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetCustomTypeAction $value
     * @psalm-param ProductSetAssetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetAssetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
