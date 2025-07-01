<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<PaymentMethodDeletedMessage>
 * @method PaymentMethodDeletedMessage current()
 * @method PaymentMethodDeletedMessage end()
 * @method PaymentMethodDeletedMessage at($offset)
 */
class PaymentMethodDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert PaymentMethodDeletedMessage $value
     * @psalm-param PaymentMethodDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodDeletedMessage $data */
                $data = PaymentMethodDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
