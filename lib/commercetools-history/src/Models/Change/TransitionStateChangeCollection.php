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
 * @extends ChangeCollection<TransitionStateChange>
 * @method TransitionStateChange current()
 * @method TransitionStateChange at($offset)
 */
class TransitionStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert TransitionStateChange $value
     * @psalm-param TransitionStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TransitionStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TransitionStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransitionStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?TransitionStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TransitionStateChange $data */
                $data = TransitionStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
