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
 * @extends MapperSequence<ZoneUpdateAction>
 * @method ZoneUpdateAction current()
 * @method ZoneUpdateAction at($offset)
 */
class ZoneUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneUpdateAction $value
     * @psalm-param ZoneUpdateAction|stdClass $value
     * @return ZoneUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ZoneUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ZoneUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}