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
 * @extends MapperSequence<TypeAddFieldDefinitionAction>
 *
 * @method TypeAddFieldDefinitionAction current()
 * @method TypeAddFieldDefinitionAction at($offset)
 */
class TypeAddFieldDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeAddFieldDefinitionAction $value
     * @psalm-param TypeAddFieldDefinitionAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?TypeAddFieldDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeAddFieldDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
