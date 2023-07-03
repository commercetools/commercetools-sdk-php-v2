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
 * @extends ChangeCollection<SetAddressCustomTypeChange>
 * @method SetAddressCustomTypeChange current()
 * @method SetAddressCustomTypeChange end()
 * @method SetAddressCustomTypeChange at($offset)
 */
class SetAddressCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAddressCustomTypeChange $value
     * @psalm-param SetAddressCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAddressCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAddressCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAddressCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAddressCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAddressCustomTypeChange $data */
                $data = SetAddressCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
