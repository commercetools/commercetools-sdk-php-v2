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
 * @extends ChangeCollection<SetCountryChange>
 * @method SetCountryChange current()
 * @method SetCountryChange at($offset)
 */
class SetCountryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCountryChange $value
     * @psalm-param SetCountryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCountryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCountryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCountryChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCountryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCountryChange $data */
                $data = SetCountryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
