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
 * @extends MapperSequence<TransitionCustomLineItemStateAction>
 * @method TransitionCustomLineItemStateAction current()
 * @method TransitionCustomLineItemStateAction at($offset)
 */
class TransitionCustomLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TransitionCustomLineItemStateAction $value
     * @psalm-param TransitionCustomLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionCustomLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionCustomLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?TransitionCustomLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransitionCustomLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
