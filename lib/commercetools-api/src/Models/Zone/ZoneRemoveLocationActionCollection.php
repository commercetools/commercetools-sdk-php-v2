<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ZoneRemoveLocationAction>
 * @method ZoneRemoveLocationAction current()
 * @method ZoneRemoveLocationAction at($offset)
 */
class ZoneRemoveLocationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneRemoveLocationAction $value
     * @psalm-param ZoneRemoveLocationAction|stdClass $value
     * @return ZoneRemoveLocationActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ZoneRemoveLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneRemoveLocationActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}