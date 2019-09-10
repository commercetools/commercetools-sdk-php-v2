<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentUpdate>
 * @method PaymentUpdate current()
 * @method PaymentUpdate at($offset)
 */
class PaymentUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentUpdate $value
     * @psalm-param PaymentUpdate|stdClass $value
     * @return PaymentUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}