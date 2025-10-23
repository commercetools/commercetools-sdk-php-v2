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
 * @extends ChangeCollection<SetInheritedStoresChange>
 * @method SetInheritedStoresChange current()
 * @method SetInheritedStoresChange end()
 * @method SetInheritedStoresChange at($offset)
 */
class SetInheritedStoresChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetInheritedStoresChange $value
     * @psalm-param SetInheritedStoresChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInheritedStoresChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInheritedStoresChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInheritedStoresChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetInheritedStoresChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetInheritedStoresChange $data */
                $data = SetInheritedStoresChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
