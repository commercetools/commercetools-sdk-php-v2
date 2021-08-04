<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Type\TypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TypeUpdateActionCollection<TypeChangeEnumValueOrderAction>
 * @method TypeChangeEnumValueOrderAction current()
 * @method TypeChangeEnumValueOrderAction end()
 * @method TypeChangeEnumValueOrderAction at($offset)
 */
class TypeChangeEnumValueOrderActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeEnumValueOrderAction $value
     * @psalm-param TypeChangeEnumValueOrderAction|stdClass $value
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
        return function (?int $index): ?TypeChangeEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeEnumValueOrderAction $data */
                $data = TypeChangeEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
