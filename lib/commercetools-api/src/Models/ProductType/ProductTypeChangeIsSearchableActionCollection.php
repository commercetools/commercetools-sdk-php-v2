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
 * @extends MapperSequence<ProductTypeChangeIsSearchableAction>
 *
 * @method ProductTypeChangeIsSearchableAction current()
 * @method ProductTypeChangeIsSearchableAction at($offset)
 */
class ProductTypeChangeIsSearchableActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeIsSearchableAction $value
     * @psalm-param ProductTypeChangeIsSearchableAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeIsSearchableActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeIsSearchableAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeIsSearchableAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeIsSearchableAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeIsSearchableActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
