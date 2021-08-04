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
 * @extends ChangeCollection<SetCustomLineItemMoneyChange>
 * @method SetCustomLineItemMoneyChange current()
 * @method SetCustomLineItemMoneyChange at($offset)
 */
class SetCustomLineItemMoneyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemMoneyChange $value
     * @psalm-param SetCustomLineItemMoneyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemMoneyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemMoneyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemMoneyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomLineItemMoneyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemMoneyChange $data */
                $data = SetCustomLineItemMoneyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
