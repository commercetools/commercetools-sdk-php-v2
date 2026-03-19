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
 * @extends ChangeCollection<SetTransactionCustomFieldChange>
 * @method SetTransactionCustomFieldChange current()
 * @method SetTransactionCustomFieldChange end()
 * @method SetTransactionCustomFieldChange at($offset)
 */
class SetTransactionCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTransactionCustomFieldChange $value
     * @psalm-param SetTransactionCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTransactionCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTransactionCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTransactionCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTransactionCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTransactionCustomFieldChange $data */
                $data = SetTransactionCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
