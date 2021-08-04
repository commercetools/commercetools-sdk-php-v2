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
 * @extends TypeUpdateActionCollection<TypeChangeFieldDefinitionOrderAction>
 * @method TypeChangeFieldDefinitionOrderAction current()
 * @method TypeChangeFieldDefinitionOrderAction at($offset)
 */
class TypeChangeFieldDefinitionOrderActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeFieldDefinitionOrderAction $value
     * @psalm-param TypeChangeFieldDefinitionOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeFieldDefinitionOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeFieldDefinitionOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeFieldDefinitionOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeChangeFieldDefinitionOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeFieldDefinitionOrderAction $data */
                $data = TypeChangeFieldDefinitionOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
