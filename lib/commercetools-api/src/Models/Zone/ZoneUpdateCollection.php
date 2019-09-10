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
 * @extends MapperSequence<ZoneUpdate>
 * @method ZoneUpdate current()
 * @method ZoneUpdate at($offset)
 */
class ZoneUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneUpdate $value
     * @psalm-param ZoneUpdate|stdClass $value
     * @return ZoneUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ZoneUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?ZoneUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}