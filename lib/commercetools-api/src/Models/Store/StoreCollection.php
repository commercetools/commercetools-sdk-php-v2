<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Store>
 * @method Store current()
 * @method Store at($offset)
 */
class StoreCollection extends MapperSequence
{
    /**
     * @psalm-assert Store $value
     * @psalm-param Store|stdClass $value
     * @return StoreCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof Store) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Store
     */
    protected function mapper()
    {
        return function(int $index): ?Store {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}