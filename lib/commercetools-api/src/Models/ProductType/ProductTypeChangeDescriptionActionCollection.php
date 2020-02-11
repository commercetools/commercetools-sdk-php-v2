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
 * @extends MapperSequence<ProductTypeChangeDescriptionAction>
 * @method ProductTypeChangeDescriptionAction current()
 * @method ProductTypeChangeDescriptionAction at($offset)
 */
class ProductTypeChangeDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeDescriptionAction $value
     * @psalm-param ProductTypeChangeDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
