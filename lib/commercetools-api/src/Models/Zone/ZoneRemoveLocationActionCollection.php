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
 * @extends ZoneUpdateActionCollection<ZoneRemoveLocationAction>
 * @method ZoneRemoveLocationAction current()
 * @method ZoneRemoveLocationAction at($offset)
 */
class ZoneRemoveLocationActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @psalm-assert ZoneRemoveLocationAction $value
     * @psalm-param ZoneRemoveLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneRemoveLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneRemoveLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneRemoveLocationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ZoneRemoveLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneRemoveLocationAction $data */
                $data = ZoneRemoveLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
