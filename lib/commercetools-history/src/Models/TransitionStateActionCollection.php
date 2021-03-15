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
 * @extends MapperSequence<TransitionStateAction>
 * @method TransitionStateAction current()
 * @method TransitionStateAction at($offset)
 */
class TransitionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TransitionStateAction $value
     * @psalm-param TransitionStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?TransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
