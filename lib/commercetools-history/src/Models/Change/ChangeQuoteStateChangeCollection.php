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
 * @extends ChangeCollection<ChangeQuoteStateChange>
 * @method ChangeQuoteStateChange current()
 * @method ChangeQuoteStateChange end()
 * @method ChangeQuoteStateChange at($offset)
 */
class ChangeQuoteStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeQuoteStateChange $value
     * @psalm-param ChangeQuoteStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeQuoteStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeQuoteStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeQuoteStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeQuoteStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeQuoteStateChange $data */
                $data = ChangeQuoteStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
