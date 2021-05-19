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
 * @extends ChangeCollection<ChangeTaxRoundingModeChange>
 * @method ChangeTaxRoundingModeChange current()
 * @method ChangeTaxRoundingModeChange at($offset)
 */
class ChangeTaxRoundingModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTaxRoundingModeChange $value
     * @psalm-param ChangeTaxRoundingModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTaxRoundingModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTaxRoundingModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTaxRoundingModeChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTaxRoundingModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTaxRoundingModeChange $data */
                $data = ChangeTaxRoundingModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
