<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Payment\PaymentUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends PaymentUpdateActionCollection<PaymentAddInterfaceInteractionAction>
 * @method PaymentAddInterfaceInteractionAction current()
 * @method PaymentAddInterfaceInteractionAction at($offset)
 */
class PaymentAddInterfaceInteractionActionCollection extends PaymentUpdateActionCollection
{
    /**
     * @psalm-assert PaymentAddInterfaceInteractionAction $value
     * @psalm-param PaymentAddInterfaceInteractionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentAddInterfaceInteractionActionCollection
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
        return function (int $index): ?PaymentAddInterfaceInteractionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentAddInterfaceInteractionAction $data */
                $data = PaymentAddInterfaceInteractionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
