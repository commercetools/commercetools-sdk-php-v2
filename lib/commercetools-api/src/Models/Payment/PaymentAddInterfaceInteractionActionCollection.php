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
 * @extends MapperSequence<PaymentAddInterfaceInteractionAction>
 * @method PaymentAddInterfaceInteractionAction current()
 * @method PaymentAddInterfaceInteractionAction at($offset)
 */
class PaymentAddInterfaceInteractionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentAddInterfaceInteractionAction $value
     * @psalm-param PaymentAddInterfaceInteractionAction|stdClass $value
     * @return PaymentAddInterfaceInteractionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof PaymentAddInterfaceInteractionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentAddInterfaceInteractionAction
     */
    protected function mapper()
    {
        return function(int $index): ?PaymentAddInterfaceInteractionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PaymentAddInterfaceInteractionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}