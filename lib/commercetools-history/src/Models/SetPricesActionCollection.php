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
 * @extends MapperSequence<SetPricesAction>
 * @method SetPricesAction current()
 * @method SetPricesAction at($offset)
 */
class SetPricesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetPricesAction $value
     * @psalm-param SetPricesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPricesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPricesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPricesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetPricesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetPricesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
