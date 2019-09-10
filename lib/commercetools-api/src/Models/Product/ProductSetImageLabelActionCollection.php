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
 * @extends MapperSequence<ProductSetImageLabelAction>
 *
 * @method ProductSetImageLabelAction current()
 * @method ProductSetImageLabelAction at($offset)
 */
class ProductSetImageLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetImageLabelAction $value
     * @psalm-param ProductSetImageLabelAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetImageLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetImageLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetImageLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetImageLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetImageLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
