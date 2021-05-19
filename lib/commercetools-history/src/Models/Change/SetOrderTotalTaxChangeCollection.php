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
 * @extends ChangeCollection<SetOrderTotalTaxChange>
 * @method SetOrderTotalTaxChange current()
 * @method SetOrderTotalTaxChange at($offset)
 */
class SetOrderTotalTaxChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetOrderTotalTaxChange $value
     * @psalm-param SetOrderTotalTaxChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderTotalTaxChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderTotalTaxChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderTotalTaxChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderTotalTaxChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderTotalTaxChange $data */
                $data = SetOrderTotalTaxChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
