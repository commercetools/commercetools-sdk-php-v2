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
 * @extends MapperSequence<ProductTransitionStateAction>
 *
 * @method ProductTransitionStateAction current()
 * @method ProductTransitionStateAction at($offset)
 */
class ProductTransitionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTransitionStateAction $value
     * @psalm-param ProductTransitionStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTransitionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
