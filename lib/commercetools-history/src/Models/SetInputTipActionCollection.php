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
 * @extends MapperSequence<SetInputTipAction>
 * @method SetInputTipAction current()
 * @method SetInputTipAction at($offset)
 */
class SetInputTipActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetInputTipAction $value
     * @psalm-param SetInputTipAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInputTipActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInputTipAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInputTipAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetInputTipAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetInputTipActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
