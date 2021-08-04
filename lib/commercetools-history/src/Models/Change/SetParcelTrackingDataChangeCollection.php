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
 * @extends ChangeCollection<SetParcelTrackingDataChange>
 * @method SetParcelTrackingDataChange current()
 * @method SetParcelTrackingDataChange end()
 * @method SetParcelTrackingDataChange at($offset)
 */
class SetParcelTrackingDataChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetParcelTrackingDataChange $value
     * @psalm-param SetParcelTrackingDataChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelTrackingDataChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelTrackingDataChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelTrackingDataChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetParcelTrackingDataChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetParcelTrackingDataChange $data */
                $data = SetParcelTrackingDataChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
