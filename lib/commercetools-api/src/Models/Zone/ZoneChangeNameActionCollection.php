<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Zone\ZoneUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ZoneUpdateActionCollection<ZoneChangeNameAction>
 * @method ZoneChangeNameAction current()
 * @method ZoneChangeNameAction at($offset)
 */
class ZoneChangeNameActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @psalm-assert ZoneChangeNameAction $value
     * @psalm-param ZoneChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ZoneChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneChangeNameAction $data */
                $data = ZoneChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
