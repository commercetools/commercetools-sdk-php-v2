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
 * @extends MapperSequence<SetStoresAction>
 * @method SetStoresAction current()
 * @method SetStoresAction at($offset)
 */
class SetStoresActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStoresAction $value
     * @psalm-param SetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStoresAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
