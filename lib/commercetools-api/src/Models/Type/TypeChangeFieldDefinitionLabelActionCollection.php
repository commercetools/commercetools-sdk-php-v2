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
 * @extends TypeUpdateActionCollection<TypeChangeFieldDefinitionLabelAction>
 * @method TypeChangeFieldDefinitionLabelAction current()
 * @method TypeChangeFieldDefinitionLabelAction end()
 * @method TypeChangeFieldDefinitionLabelAction at($offset)
 */
class TypeChangeFieldDefinitionLabelActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeFieldDefinitionLabelAction $value
     * @psalm-param TypeChangeFieldDefinitionLabelAction|stdClass $value
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
        return function (?int $index): ?TypeChangeFieldDefinitionLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeFieldDefinitionLabelAction $data */
                $data = TypeChangeFieldDefinitionLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
