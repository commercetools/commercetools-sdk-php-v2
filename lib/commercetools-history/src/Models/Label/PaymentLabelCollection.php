<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<PaymentLabel>
 * @method PaymentLabel current()
 * @method PaymentLabel end()
 * @method PaymentLabel at($offset)
 */
class PaymentLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert PaymentLabel $value
     * @psalm-param PaymentLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentLabel $data */
                $data = PaymentLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
