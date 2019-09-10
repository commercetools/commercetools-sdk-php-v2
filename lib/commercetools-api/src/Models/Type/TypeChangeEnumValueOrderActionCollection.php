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
 * @extends MapperSequence<TypeChangeEnumValueOrderAction>
 *
 * @method TypeChangeEnumValueOrderAction current()
 * @method TypeChangeEnumValueOrderAction at($offset)
 */
class TypeChangeEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeEnumValueOrderAction $value
     * @psalm-param TypeChangeEnumValueOrderAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeChangeEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
