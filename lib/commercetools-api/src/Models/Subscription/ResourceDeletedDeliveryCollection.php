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
 * @extends MapperSequence<ResourceDeletedDelivery>
 * @method ResourceDeletedDelivery current()
 * @method ResourceDeletedDelivery at($offset)
 */
class ResourceDeletedDeliveryCollection extends MapperSequence
{
    /**
     * @psalm-assert ResourceDeletedDelivery $value
     * @psalm-param ResourceDeletedDelivery|stdClass $value
     * @return ResourceDeletedDeliveryCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ResourceDeletedDelivery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResourceDeletedDelivery
     */
    protected function mapper()
    {
        return function(int $index): ?ResourceDeletedDelivery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ResourceDeletedDeliveryModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}