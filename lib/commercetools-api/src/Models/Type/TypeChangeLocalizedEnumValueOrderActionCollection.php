<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeChangeLocalizedEnumValueOrderAction>
 * @method TypeChangeLocalizedEnumValueOrderAction current()
 * @method TypeChangeLocalizedEnumValueOrderAction at($offset)
 */
class TypeChangeLocalizedEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeLocalizedEnumValueOrderAction $value
     * @psalm-param TypeChangeLocalizedEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeLocalizedEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeLocalizedEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeLocalizedEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
