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
 * @extends MapperSequence<SetOrderLineItemCustomFieldAction>
 * @method SetOrderLineItemCustomFieldAction current()
 * @method SetOrderLineItemCustomFieldAction at($offset)
 */
class SetOrderLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderLineItemCustomFieldAction $value
     * @psalm-param SetOrderLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
