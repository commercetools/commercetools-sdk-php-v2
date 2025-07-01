<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of PaymentMethodUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method PaymentMethodUpdateAction current()
 * @method PaymentMethodUpdateAction end()
 * @method PaymentMethodUpdateAction at($offset)
 */
class PaymentMethodUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = PaymentMethodUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
