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
 * @extends MapperSequence<ZoneDraft>
 * @method ZoneDraft current()
 * @method ZoneDraft at($offset)
 */
class ZoneDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneDraft $value
     * @psalm-param ZoneDraft|stdClass $value
     * @return ZoneDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ZoneDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneDraft
     */
    protected function mapper()
    {
        return function(int $index): ?ZoneDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}