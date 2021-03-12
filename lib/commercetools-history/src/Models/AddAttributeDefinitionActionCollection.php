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
 * @extends MapperSequence<AddAttributeDefinitionAction>
 * @method AddAttributeDefinitionAction current()
 * @method AddAttributeDefinitionAction at($offset)
 */
class AddAttributeDefinitionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAttributeDefinitionAction $value
     * @psalm-param AddAttributeDefinitionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAttributeDefinitionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAttributeDefinitionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAttributeDefinitionAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddAttributeDefinitionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAttributeDefinitionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
