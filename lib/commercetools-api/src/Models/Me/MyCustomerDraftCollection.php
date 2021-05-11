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
 * @extends MapperSequence<MyCustomerDraft>
 * @method MyCustomerDraft current()
 * @method MyCustomerDraft at($offset)
 */
class MyCustomerDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerDraft $value
     * @psalm-param MyCustomerDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerDraft
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerDraft $data */
                $data = MyCustomerDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
