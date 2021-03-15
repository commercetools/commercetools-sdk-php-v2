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
 * @extends MapperSequence<SetVatIdAction>
 * @method SetVatIdAction current()
 * @method SetVatIdAction at($offset)
 */
class SetVatIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetVatIdAction $value
     * @psalm-param SetVatIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetVatIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetVatIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetVatIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetVatIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetVatIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
