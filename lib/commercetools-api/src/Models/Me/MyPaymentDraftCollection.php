<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyPaymentDraft>
 * @method MyPaymentDraft current()
 * @method MyPaymentDraft at($offset)
 */
class MyPaymentDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentDraft $value
     * @psalm-param MyPaymentDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentDraft $data */
                $data = MyPaymentDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
