<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveAttributeDefinitionAction>
 * @method RemoveAttributeDefinitionAction current()
 * @method RemoveAttributeDefinitionAction at($offset)
 */
class RemoveAttributeDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveAttributeDefinitionAction $value
     * @psalm-param RemoveAttributeDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAttributeDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAttributeDefinitionAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveAttributeDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveAttributeDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
