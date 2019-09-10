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
 * @extends MapperSequence<ProductTypeAddPlainEnumValueAction>
 *
 * @method ProductTypeAddPlainEnumValueAction current()
 * @method ProductTypeAddPlainEnumValueAction at($offset)
 */
class ProductTypeAddPlainEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeAddPlainEnumValueAction $value
     * @psalm-param ProductTypeAddPlainEnumValueAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeAddPlainEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeAddPlainEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeAddPlainEnumValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeAddPlainEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeAddPlainEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
