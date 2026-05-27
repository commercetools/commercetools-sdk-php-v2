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
 * @extends ChangeCollection<SetTransactionInterfaceIdChange>
 * @method SetTransactionInterfaceIdChange current()
 * @method SetTransactionInterfaceIdChange end()
 * @method SetTransactionInterfaceIdChange at($offset)
 */
class SetTransactionInterfaceIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTransactionInterfaceIdChange $value
     * @psalm-param SetTransactionInterfaceIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTransactionInterfaceIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTransactionInterfaceIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTransactionInterfaceIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTransactionInterfaceIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTransactionInterfaceIdChange $data */
                $data = SetTransactionInterfaceIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
