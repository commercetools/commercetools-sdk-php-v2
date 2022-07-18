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
 * @extends ChangeCollection<ChangeQuoteRequestStateChange>
 * @method ChangeQuoteRequestStateChange current()
 * @method ChangeQuoteRequestStateChange end()
 * @method ChangeQuoteRequestStateChange at($offset)
 */
class ChangeQuoteRequestStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeQuoteRequestStateChange $value
     * @psalm-param ChangeQuoteRequestStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeQuoteRequestStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeQuoteRequestStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeQuoteRequestStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeQuoteRequestStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeQuoteRequestStateChange $data */
                $data = ChangeQuoteRequestStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
