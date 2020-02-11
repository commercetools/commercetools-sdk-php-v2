<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ZoneSetKeyAction>
 * @method ZoneSetKeyAction current()
 * @method ZoneSetKeyAction at($offset)
 */
class ZoneSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneSetKeyAction $value
     * @psalm-param ZoneSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?ZoneSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
