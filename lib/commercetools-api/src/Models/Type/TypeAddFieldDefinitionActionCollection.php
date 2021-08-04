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
 * @extends TypeUpdateActionCollection<TypeAddFieldDefinitionAction>
 * @method TypeAddFieldDefinitionAction current()
 * @method TypeAddFieldDefinitionAction at($offset)
 */
class TypeAddFieldDefinitionActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeAddFieldDefinitionAction $value
     * @psalm-param TypeAddFieldDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeAddFieldDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeAddFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeAddFieldDefinitionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeAddFieldDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeAddFieldDefinitionAction $data */
                $data = TypeAddFieldDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
