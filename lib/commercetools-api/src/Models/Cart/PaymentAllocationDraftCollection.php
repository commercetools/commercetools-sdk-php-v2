<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentAllocationDraft>
 * @method PaymentAllocationDraft current()
 * @method PaymentAllocationDraft end()
 * @method PaymentAllocationDraft at($offset)
 */
class PaymentAllocationDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentAllocationDraft $value
     * @psalm-param PaymentAllocationDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentAllocationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentAllocationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentAllocationDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentAllocationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentAllocationDraft $data */
                $data = PaymentAllocationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
