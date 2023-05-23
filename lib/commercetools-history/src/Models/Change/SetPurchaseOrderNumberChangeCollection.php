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
 * @extends ChangeCollection<SetPurchaseOrderNumberChange>
 * @method SetPurchaseOrderNumberChange current()
 * @method SetPurchaseOrderNumberChange end()
 * @method SetPurchaseOrderNumberChange at($offset)
 */
class SetPurchaseOrderNumberChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPurchaseOrderNumberChange $value
     * @psalm-param SetPurchaseOrderNumberChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPurchaseOrderNumberChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPurchaseOrderNumberChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPurchaseOrderNumberChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPurchaseOrderNumberChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPurchaseOrderNumberChange $data */
                $data = SetPurchaseOrderNumberChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
