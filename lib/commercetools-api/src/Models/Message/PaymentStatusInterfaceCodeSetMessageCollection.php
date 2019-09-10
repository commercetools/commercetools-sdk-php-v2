<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentStatusInterfaceCodeSetMessage>
 * @method PaymentStatusInterfaceCodeSetMessage current()
 * @method PaymentStatusInterfaceCodeSetMessage at($offset)
 */
class PaymentStatusInterfaceCodeSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatusInterfaceCodeSetMessage $value
     * @psalm-param PaymentStatusInterfaceCodeSetMessage|stdClass $value
     * @return PaymentStatusInterfaceCodeSetMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusInterfaceCodeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusInterfaceCodeSetMessage
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentStatusInterfaceCodeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusInterfaceCodeSetMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}