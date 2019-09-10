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
 * @extends MapperSequence<DeliveryFormat>
 * @method DeliveryFormat current()
 * @method DeliveryFormat at($offset)
 */
class DeliveryFormatCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryFormat $value
     * @psalm-param DeliveryFormat|stdClass $value
     * @return DeliveryFormatCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryFormat
     */
    protected function mapper()
    {
        return function(int $index): ?DeliveryFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DeliveryFormatModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}