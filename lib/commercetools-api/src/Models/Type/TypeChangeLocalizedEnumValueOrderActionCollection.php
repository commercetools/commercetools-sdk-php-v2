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
 * @extends TypeUpdateActionCollection<TypeChangeLocalizedEnumValueOrderAction>
 * @method TypeChangeLocalizedEnumValueOrderAction current()
 * @method TypeChangeLocalizedEnumValueOrderAction at($offset)
 */
class TypeChangeLocalizedEnumValueOrderActionCollection extends TypeUpdateActionCollection
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
                /** @var TypeChangeLocalizedEnumValueOrderAction $data */
                $data = TypeChangeLocalizedEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
