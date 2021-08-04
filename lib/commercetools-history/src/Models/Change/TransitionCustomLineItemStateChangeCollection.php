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
 * @extends ChangeCollection<TransitionCustomLineItemStateChange>
 * @method TransitionCustomLineItemStateChange current()
 * @method TransitionCustomLineItemStateChange at($offset)
 */
class TransitionCustomLineItemStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert TransitionCustomLineItemStateChange $value
     * @psalm-param TransitionCustomLineItemStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionCustomLineItemStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionCustomLineItemStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionCustomLineItemStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?TransitionCustomLineItemStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TransitionCustomLineItemStateChange $data */
                $data = TransitionCustomLineItemStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
