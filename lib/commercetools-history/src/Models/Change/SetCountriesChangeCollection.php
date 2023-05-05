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
 * @extends ChangeCollection<SetCountriesChange>
 * @method SetCountriesChange current()
 * @method SetCountriesChange end()
 * @method SetCountriesChange at($offset)
 */
class SetCountriesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCountriesChange $value
     * @psalm-param SetCountriesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCountriesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCountriesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCountriesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCountriesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCountriesChange $data */
                $data = SetCountriesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
