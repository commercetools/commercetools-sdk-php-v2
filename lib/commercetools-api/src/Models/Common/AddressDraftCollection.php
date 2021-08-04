<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\BaseAddressCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseAddressCollection<AddressDraft>
 * @method AddressDraft current()
 * @method AddressDraft end()
 * @method AddressDraft at($offset)
 */
class AddressDraftCollection extends BaseAddressCollection
{
    /**
     * @psalm-assert AddressDraft $value
     * @psalm-param AddressDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddressDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddressDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddressDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AddressDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddressDraft $data */
                $data = AddressDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
