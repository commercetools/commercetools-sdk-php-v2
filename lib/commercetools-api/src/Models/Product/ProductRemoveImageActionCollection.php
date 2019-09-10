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
 * @extends MapperSequence<ProductRemoveImageAction>
 *
 * @method ProductRemoveImageAction current()
 * @method ProductRemoveImageAction at($offset)
 */
class ProductRemoveImageActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRemoveImageAction $value
     * @psalm-param ProductRemoveImageAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveImageAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRemoveImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
