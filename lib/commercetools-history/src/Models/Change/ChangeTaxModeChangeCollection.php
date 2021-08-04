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
 * @extends ChangeCollection<ChangeTaxModeChange>
 * @method ChangeTaxModeChange current()
 * @method ChangeTaxModeChange end()
 * @method ChangeTaxModeChange at($offset)
 */
class ChangeTaxModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTaxModeChange $value
     * @psalm-param ChangeTaxModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTaxModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTaxModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTaxModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTaxModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTaxModeChange $data */
                $data = ChangeTaxModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
