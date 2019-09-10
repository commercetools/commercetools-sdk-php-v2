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
 * @extends MapperSequence<PaymentReference>
 * @method PaymentReference current()
 * @method PaymentReference at($offset)
 */
class PaymentReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentReference $value
     * @psalm-param PaymentReference|stdClass $value
     * @return PaymentReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentReference
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}