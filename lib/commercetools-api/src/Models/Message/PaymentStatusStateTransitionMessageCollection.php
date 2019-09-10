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
 * @extends MapperSequence<PaymentStatusStateTransitionMessage>
 * @method PaymentStatusStateTransitionMessage current()
 * @method PaymentStatusStateTransitionMessage at($offset)
 */
class PaymentStatusStateTransitionMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentStatusStateTransitionMessage $value
     * @psalm-param PaymentStatusStateTransitionMessage|stdClass $value
     * @return PaymentStatusStateTransitionMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentStatusStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentStatusStateTransitionMessage
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentStatusStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentStatusStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}