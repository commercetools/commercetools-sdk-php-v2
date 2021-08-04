<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerDraft>
 * @method CustomerDraft current()
 * @method CustomerDraft end()
 * @method CustomerDraft at($offset)
 */
class CustomerDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerDraft $value
     * @psalm-param CustomerDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDraft $data */
                $data = CustomerDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
