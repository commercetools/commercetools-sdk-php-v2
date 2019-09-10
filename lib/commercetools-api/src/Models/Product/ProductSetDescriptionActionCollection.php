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
 * @extends MapperSequence<ProductSetDescriptionAction>
 *
 * @method ProductSetDescriptionAction current()
 * @method ProductSetDescriptionAction at($offset)
 */
class ProductSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetDescriptionAction $value
     * @psalm-param ProductSetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
