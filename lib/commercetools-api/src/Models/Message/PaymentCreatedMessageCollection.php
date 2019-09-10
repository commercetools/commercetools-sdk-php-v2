<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentCreatedMessage>
 *
 * @method PaymentCreatedMessage current()
 * @method PaymentCreatedMessage at($offset)
 */
class PaymentCreatedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentCreatedMessage $value
     * @psalm-param PaymentCreatedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PaymentCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentCreatedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?PaymentCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
