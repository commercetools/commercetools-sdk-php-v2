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
 * @extends MapperSequence<PaymentInfo>
 * @method PaymentInfo current()
 * @method PaymentInfo at($offset)
 */
class PaymentInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentInfo $value
     * @psalm-param PaymentInfo|stdClass $value
     * @return PaymentInfoCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentInfo
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentInfoModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}