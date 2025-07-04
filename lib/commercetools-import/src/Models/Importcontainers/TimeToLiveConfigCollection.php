<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TimeToLiveConfig>
 * @method TimeToLiveConfig current()
 * @method TimeToLiveConfig end()
 * @method TimeToLiveConfig at($offset)
 */
class TimeToLiveConfigCollection extends MapperSequence
{
    /**
     * @psalm-assert TimeToLiveConfig $value
     * @psalm-param TimeToLiveConfig|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeToLiveConfigCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeToLiveConfig) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeToLiveConfig
     */
    protected function mapper()
    {
        return function (?int $index): ?TimeToLiveConfig {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TimeToLiveConfig $data */
                $data = TimeToLiveConfigModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
