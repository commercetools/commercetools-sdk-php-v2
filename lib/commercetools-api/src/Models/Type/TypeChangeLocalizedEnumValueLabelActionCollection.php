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
 * @extends MapperSequence<TypeChangeLocalizedEnumValueLabelAction>
 *
 * @method TypeChangeLocalizedEnumValueLabelAction current()
 * @method TypeChangeLocalizedEnumValueLabelAction at($offset)
 */
class TypeChangeLocalizedEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeLocalizedEnumValueLabelAction $value
     * @psalm-param TypeChangeLocalizedEnumValueLabelAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeChangeLocalizedEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeLocalizedEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeLocalizedEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeLocalizedEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeLocalizedEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
