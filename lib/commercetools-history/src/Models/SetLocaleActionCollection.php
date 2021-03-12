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
 * @extends MapperSequence<SetLocaleAction>
 * @method SetLocaleAction current()
 * @method SetLocaleAction at($offset)
 */
class SetLocaleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLocaleAction $value
     * @psalm-param SetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
