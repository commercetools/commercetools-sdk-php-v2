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
 * @extends ChangeCollection<SetMethodInfoInterfaceAccountChange>
 * @method SetMethodInfoInterfaceAccountChange current()
 * @method SetMethodInfoInterfaceAccountChange end()
 * @method SetMethodInfoInterfaceAccountChange at($offset)
 */
class SetMethodInfoInterfaceAccountChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoInterfaceAccountChange $value
     * @psalm-param SetMethodInfoInterfaceAccountChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoInterfaceAccountChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoInterfaceAccountChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoInterfaceAccountChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoInterfaceAccountChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoInterfaceAccountChange $data */
                $data = SetMethodInfoInterfaceAccountChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
