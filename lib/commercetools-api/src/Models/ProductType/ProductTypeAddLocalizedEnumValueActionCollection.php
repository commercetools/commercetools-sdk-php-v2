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
 * @extends MapperSequence<ProductTypeAddLocalizedEnumValueAction>
 * @method ProductTypeAddLocalizedEnumValueAction current()
 * @method ProductTypeAddLocalizedEnumValueAction at($offset)
 */
class ProductTypeAddLocalizedEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeAddLocalizedEnumValueAction $value
     * @psalm-param ProductTypeAddLocalizedEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeAddLocalizedEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeAddLocalizedEnumValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeAddLocalizedEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeAddLocalizedEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
