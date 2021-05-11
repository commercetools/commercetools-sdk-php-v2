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
 * @extends ChangeCollection<SetPricesChange>
 * @method SetPricesChange current()
 * @method SetPricesChange at($offset)
 */
class SetPricesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPricesChange $value
     * @psalm-param SetPricesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPricesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPricesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPricesChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetPricesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPricesChange $data */
                $data = SetPricesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
