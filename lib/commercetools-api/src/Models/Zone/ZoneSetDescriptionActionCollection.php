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
 * @extends MapperSequence<ZoneSetDescriptionAction>
 * @method ZoneSetDescriptionAction current()
 * @method ZoneSetDescriptionAction at($offset)
 */
class ZoneSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneSetDescriptionAction $value
     * @psalm-param ZoneSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ZoneSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
