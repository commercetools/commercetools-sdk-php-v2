<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupDraft>
 * @method CustomerGroupDraft current()
 * @method CustomerGroupDraft at($offset)
 */
class CustomerGroupDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupDraft $value
     * @psalm-param CustomerGroupDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerGroupDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
