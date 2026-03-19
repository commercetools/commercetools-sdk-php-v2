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
 * @extends ChangeCollection<SetPriceKeyChange>
 * @method SetPriceKeyChange current()
 * @method SetPriceKeyChange end()
 * @method SetPriceKeyChange at($offset)
 */
class SetPriceKeyChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPriceKeyChange $value
     * @psalm-param SetPriceKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPriceKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPriceKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPriceKeyChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPriceKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPriceKeyChange $data */
                $data = SetPriceKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
