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
 * @extends TypeUpdateActionCollection<TypeChangeLocalizedEnumValueLabelAction>
 * @method TypeChangeLocalizedEnumValueLabelAction current()
 * @method TypeChangeLocalizedEnumValueLabelAction end()
 * @method TypeChangeLocalizedEnumValueLabelAction at($offset)
 */
class TypeChangeLocalizedEnumValueLabelActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeLocalizedEnumValueLabelAction $value
     * @psalm-param TypeChangeLocalizedEnumValueLabelAction|stdClass $value
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
        return function (?int $index): ?TypeChangeLocalizedEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeLocalizedEnumValueLabelAction $data */
                $data = TypeChangeLocalizedEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
