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
 * @extends MapperSequence<TransitionLineItemStateAction>
 * @method TransitionLineItemStateAction current()
 * @method TransitionLineItemStateAction at($offset)
 */
class TransitionLineItemStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TransitionLineItemStateAction $value
     * @psalm-param TransitionLineItemStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionLineItemStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionLineItemStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?TransitionLineItemStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransitionLineItemStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
