<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ResourceUpdatedDelivery>
 * @method ResourceUpdatedDelivery current()
 * @method ResourceUpdatedDelivery at($offset)
 */
class ResourceUpdatedDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceUpdatedDelivery $value
     * @psalm-param ResourceUpdatedDelivery|stdClass $value
     * @return ResourceUpdatedDeliveryCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ResourceUpdatedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceUpdatedDelivery
     */
    protected function mapper()
    {
        return function(int $index): ?ResourceUpdatedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceUpdatedDeliveryModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}