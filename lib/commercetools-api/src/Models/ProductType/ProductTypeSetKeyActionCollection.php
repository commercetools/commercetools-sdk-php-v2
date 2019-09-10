<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeSetKeyAction>
 *
 * @method ProductTypeSetKeyAction current()
 * @method ProductTypeSetKeyAction at($offset)
 */
class ProductTypeSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeSetKeyAction $value
     * @psalm-param ProductTypeSetKeyAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
