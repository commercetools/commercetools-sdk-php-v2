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
 * @extends MapperSequence<ProductTypeChangeLabelAction>
 *
 * @method ProductTypeChangeLabelAction current()
 * @method ProductTypeChangeLabelAction at($offset)
 */
class ProductTypeChangeLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeLabelAction $value
     * @psalm-param ProductTypeChangeLabelAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
