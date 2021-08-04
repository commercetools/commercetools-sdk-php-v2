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
 * @extends TypeUpdateActionCollection<TypeChangeEnumValueLabelAction>
 * @method TypeChangeEnumValueLabelAction current()
 * @method TypeChangeEnumValueLabelAction end()
 * @method TypeChangeEnumValueLabelAction at($offset)
 */
class TypeChangeEnumValueLabelActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeEnumValueLabelAction $value
     * @psalm-param TypeChangeEnumValueLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeChangeEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeEnumValueLabelAction $data */
                $data = TypeChangeEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
