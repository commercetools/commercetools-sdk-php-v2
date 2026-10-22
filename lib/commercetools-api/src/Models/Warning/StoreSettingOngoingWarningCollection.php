<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends WarningObjectCollection<StoreSettingOngoingWarning>
 * @method StoreSettingOngoingWarning current()
 * @method StoreSettingOngoingWarning end()
 * @method StoreSettingOngoingWarning at($offset)
 */
class StoreSettingOngoingWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert StoreSettingOngoingWarning $value
     * @psalm-param StoreSettingOngoingWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreSettingOngoingWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreSettingOngoingWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreSettingOngoingWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreSettingOngoingWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreSettingOngoingWarning $data */
                $data = StoreSettingOngoingWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
