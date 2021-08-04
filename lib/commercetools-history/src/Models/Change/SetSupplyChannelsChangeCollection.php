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
 * @extends ChangeCollection<SetSupplyChannelsChange>
 * @method SetSupplyChannelsChange current()
 * @method SetSupplyChannelsChange end()
 * @method SetSupplyChannelsChange at($offset)
 */
class SetSupplyChannelsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetSupplyChannelsChange $value
     * @psalm-param SetSupplyChannelsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetSupplyChannelsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetSupplyChannelsChange $data */
                $data = SetSupplyChannelsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
