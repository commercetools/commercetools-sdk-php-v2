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
 * @extends MapperSequence<TypeChangeFieldDefinitionLabelAction>
 *
 * @method TypeChangeFieldDefinitionLabelAction current()
 * @method TypeChangeFieldDefinitionLabelAction at($offset)
 */
class TypeChangeFieldDefinitionLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeFieldDefinitionLabelAction $value
     * @psalm-param TypeChangeFieldDefinitionLabelAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeChangeFieldDefinitionLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeFieldDefinitionLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeFieldDefinitionLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeFieldDefinitionLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeFieldDefinitionLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
