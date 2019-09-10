<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderReference>
 * @method OrderReference current()
 * @method OrderReference at($offset)
 */
class OrderReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderReference $value
     * @psalm-param OrderReference|stdClass $value
     * @return OrderReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReference
     */
    protected function mapper()
    {
        return function(int $index): ?OrderReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}