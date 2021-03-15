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
 * @extends MapperSequence<SetTextLineItemCustomFieldAction>
 * @method SetTextLineItemCustomFieldAction current()
 * @method SetTextLineItemCustomFieldAction at($offset)
 */
class SetTextLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextLineItemCustomFieldAction $value
     * @psalm-param SetTextLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
