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
 * @extends ChangeCollection<SetStoreModeChange>
 * @method SetStoreModeChange current()
 * @method SetStoreModeChange end()
 * @method SetStoreModeChange at($offset)
 */
class SetStoreModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetStoreModeChange $value
     * @psalm-param SetStoreModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStoreModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStoreModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStoreModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetStoreModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetStoreModeChange $data */
                $data = SetStoreModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
