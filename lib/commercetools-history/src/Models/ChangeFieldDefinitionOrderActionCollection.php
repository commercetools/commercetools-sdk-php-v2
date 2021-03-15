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
 * @extends MapperSequence<ChangeFieldDefinitionOrderAction>
 * @method ChangeFieldDefinitionOrderAction current()
 * @method ChangeFieldDefinitionOrderAction at($offset)
 */
class ChangeFieldDefinitionOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeFieldDefinitionOrderAction $value
     * @psalm-param ChangeFieldDefinitionOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeFieldDefinitionOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeFieldDefinitionOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeFieldDefinitionOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeFieldDefinitionOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeFieldDefinitionOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
