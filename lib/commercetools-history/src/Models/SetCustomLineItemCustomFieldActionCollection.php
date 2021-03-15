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
 * @extends MapperSequence<SetCustomLineItemCustomFieldAction>
 * @method SetCustomLineItemCustomFieldAction current()
 * @method SetCustomLineItemCustomFieldAction at($offset)
 */
class SetCustomLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemCustomFieldAction $value
     * @psalm-param SetCustomLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
