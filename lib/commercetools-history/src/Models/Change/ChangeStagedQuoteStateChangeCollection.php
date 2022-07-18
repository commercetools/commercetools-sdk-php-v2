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
 * @extends ChangeCollection<ChangeStagedQuoteStateChange>
 * @method ChangeStagedQuoteStateChange current()
 * @method ChangeStagedQuoteStateChange end()
 * @method ChangeStagedQuoteStateChange at($offset)
 */
class ChangeStagedQuoteStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeStagedQuoteStateChange $value
     * @psalm-param ChangeStagedQuoteStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStagedQuoteStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStagedQuoteStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStagedQuoteStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeStagedQuoteStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeStagedQuoteStateChange $data */
                $data = ChangeStagedQuoteStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
