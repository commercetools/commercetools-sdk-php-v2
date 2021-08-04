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
 * @extends ZoneUpdateActionCollection<ZoneSetDescriptionAction>
 * @method ZoneSetDescriptionAction current()
 * @method ZoneSetDescriptionAction end()
 * @method ZoneSetDescriptionAction at($offset)
 */
class ZoneSetDescriptionActionCollection extends ZoneUpdateActionCollection
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
        return function (?int $index): ?ZoneSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneSetDescriptionAction $data */
                $data = ZoneSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
