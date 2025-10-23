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
 * @extends ChangeCollection<ChangePriceRoundingModeChange>
 * @method ChangePriceRoundingModeChange current()
 * @method ChangePriceRoundingModeChange end()
 * @method ChangePriceRoundingModeChange at($offset)
 */
class ChangePriceRoundingModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangePriceRoundingModeChange $value
     * @psalm-param ChangePriceRoundingModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePriceRoundingModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePriceRoundingModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePriceRoundingModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangePriceRoundingModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangePriceRoundingModeChange $data */
                $data = ChangePriceRoundingModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
