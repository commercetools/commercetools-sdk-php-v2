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
 * @extends MapperSequence<ZoneChangeNameAction>
 * @method ZoneChangeNameAction current()
 * @method ZoneChangeNameAction at($offset)
 */
class ZoneChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneChangeNameAction $value
     * @psalm-param ZoneChangeNameAction|stdClass $value
     * @return ZoneChangeNameActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ZoneChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneChangeNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}