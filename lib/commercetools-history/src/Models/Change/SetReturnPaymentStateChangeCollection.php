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
 * @extends ChangeCollection<SetReturnPaymentStateChange>
 * @method SetReturnPaymentStateChange current()
 * @method SetReturnPaymentStateChange at($offset)
 */
class SetReturnPaymentStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnPaymentStateChange $value
     * @psalm-param SetReturnPaymentStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnPaymentStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnPaymentStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnPaymentStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetReturnPaymentStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnPaymentStateChange $data */
                $data = SetReturnPaymentStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
