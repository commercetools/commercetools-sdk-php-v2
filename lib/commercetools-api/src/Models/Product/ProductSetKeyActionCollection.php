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
 * @extends MapperSequence<ProductSetKeyAction>
 * @method ProductSetKeyAction current()
 * @method ProductSetKeyAction at($offset)
 */
class ProductSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetKeyAction $value
     * @psalm-param ProductSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
