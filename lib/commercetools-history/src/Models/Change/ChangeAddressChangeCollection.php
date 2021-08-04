<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeAddressChange>
 * @method ChangeAddressChange current()
 * @method ChangeAddressChange at($offset)
 */
class ChangeAddressChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeAddressChange $value
     * @psalm-param ChangeAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAddressChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeAddressChange $data */
                $data = ChangeAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
