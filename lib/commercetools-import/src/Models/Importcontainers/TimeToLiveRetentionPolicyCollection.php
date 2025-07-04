<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Importcontainers\RetentionPolicyCollection;
use stdClass;

/**
 * @extends RetentionPolicyCollection<TimeToLiveRetentionPolicy>
 * @method TimeToLiveRetentionPolicy current()
 * @method TimeToLiveRetentionPolicy end()
 * @method TimeToLiveRetentionPolicy at($offset)
 */
class TimeToLiveRetentionPolicyCollection extends RetentionPolicyCollection
{
    /**
     * @psalm-assert TimeToLiveRetentionPolicy $value
     * @psalm-param TimeToLiveRetentionPolicy|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeToLiveRetentionPolicyCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeToLiveRetentionPolicy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeToLiveRetentionPolicy
     */
    protected function mapper()
    {
        return function (?int $index): ?TimeToLiveRetentionPolicy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TimeToLiveRetentionPolicy $data */
                $data = TimeToLiveRetentionPolicyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
