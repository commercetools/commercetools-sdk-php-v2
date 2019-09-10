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
 * @extends MapperSequence<ProductSetMetaTitleAction>
 *
 * @method ProductSetMetaTitleAction current()
 * @method ProductSetMetaTitleAction at($offset)
 */
class ProductSetMetaTitleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetMetaTitleAction $value
     * @psalm-param ProductSetMetaTitleAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetMetaTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetMetaTitleAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
