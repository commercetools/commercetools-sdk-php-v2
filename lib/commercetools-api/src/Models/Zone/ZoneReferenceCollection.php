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
 * @extends MapperSequence<ZoneReference>
 * @method ZoneReference current()
 * @method ZoneReference at($offset)
 */
class ZoneReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneReference $value
     * @psalm-param ZoneReference|stdClass $value
     * @return ZoneReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ZoneReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneReference
     */
    protected function mapper()
    {
        return function(int $index): ?ZoneReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}