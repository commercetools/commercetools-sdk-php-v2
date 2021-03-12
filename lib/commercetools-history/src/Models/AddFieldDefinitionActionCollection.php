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
 * @extends MapperSequence<AddFieldDefinitionAction>
 * @method AddFieldDefinitionAction current()
 * @method AddFieldDefinitionAction at($offset)
 */
class AddFieldDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddFieldDefinitionAction $value
     * @psalm-param AddFieldDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddFieldDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddFieldDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddFieldDefinitionAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddFieldDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddFieldDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
