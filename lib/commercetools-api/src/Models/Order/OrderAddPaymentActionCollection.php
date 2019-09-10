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
 * @extends MapperSequence<OrderAddPaymentAction>
 * @method OrderAddPaymentAction current()
 * @method OrderAddPaymentAction at($offset)
 */
class OrderAddPaymentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderAddPaymentAction $value
     * @psalm-param OrderAddPaymentAction|stdClass $value
     * @return OrderAddPaymentActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderAddPaymentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderAddPaymentAction
     */
    protected function mapper()
    {
        return function(int $index): ?OrderAddPaymentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderAddPaymentActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}