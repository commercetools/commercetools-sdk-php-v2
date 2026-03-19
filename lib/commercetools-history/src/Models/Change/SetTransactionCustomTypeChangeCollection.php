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
 * @extends ChangeCollection<SetTransactionCustomTypeChange>
 * @method SetTransactionCustomTypeChange current()
 * @method SetTransactionCustomTypeChange end()
 * @method SetTransactionCustomTypeChange at($offset)
 */
class SetTransactionCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTransactionCustomTypeChange $value
     * @psalm-param SetTransactionCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTransactionCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTransactionCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTransactionCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTransactionCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTransactionCustomTypeChange $data */
                $data = SetTransactionCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
