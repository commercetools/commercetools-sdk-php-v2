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
 * @extends ChangeCollection<SetInterfaceIdChange>
 * @method SetInterfaceIdChange current()
 * @method SetInterfaceIdChange at($offset)
 */
class SetInterfaceIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetInterfaceIdChange $value
     * @psalm-param SetInterfaceIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInterfaceIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInterfaceIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInterfaceIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetInterfaceIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetInterfaceIdChange $data */
                $data = SetInterfaceIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
