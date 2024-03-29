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
 * @extends ZoneUpdateActionCollection<ZoneAddLocationAction>
 * @method ZoneAddLocationAction current()
 * @method ZoneAddLocationAction end()
 * @method ZoneAddLocationAction at($offset)
 */
class ZoneAddLocationActionCollection extends ZoneUpdateActionCollection
{
    /**
     * @psalm-assert ZoneAddLocationAction $value
     * @psalm-param ZoneAddLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneAddLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneAddLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneAddLocationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ZoneAddLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneAddLocationAction $data */
                $data = ZoneAddLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
