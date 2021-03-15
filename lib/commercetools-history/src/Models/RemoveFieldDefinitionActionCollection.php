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
 * @extends MapperSequence<RemoveFieldDefinitionAction>
 * @method RemoveFieldDefinitionAction current()
 * @method RemoveFieldDefinitionAction at($offset)
 */
class RemoveFieldDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveFieldDefinitionAction $value
     * @psalm-param RemoveFieldDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveFieldDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveFieldDefinitionAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveFieldDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveFieldDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
