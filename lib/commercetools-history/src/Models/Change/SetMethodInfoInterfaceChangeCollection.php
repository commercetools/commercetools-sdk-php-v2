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
 * @extends ChangeCollection<SetMethodInfoInterfaceChange>
 * @method SetMethodInfoInterfaceChange current()
 * @method SetMethodInfoInterfaceChange at($offset)
 */
class SetMethodInfoInterfaceChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMethodInfoInterfaceChange $value
     * @psalm-param SetMethodInfoInterfaceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoInterfaceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoInterfaceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoInterfaceChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMethodInfoInterfaceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMethodInfoInterfaceChange $data */
                $data = SetMethodInfoInterfaceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
