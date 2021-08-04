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
 * @extends ChangeCollection<SetSupplyChannelChange>
 * @method SetSupplyChannelChange current()
 * @method SetSupplyChannelChange at($offset)
 */
class SetSupplyChannelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetSupplyChannelChange $value
     * @psalm-param SetSupplyChannelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetSupplyChannelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetSupplyChannelChange $data */
                $data = SetSupplyChannelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
