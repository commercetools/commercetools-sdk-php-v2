<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Zone>
 * @method Zone current()
 * @method Zone at($offset)
 */
class ZoneCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Zone $value
     * @psalm-param Zone|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneCollection
     */
    public function add($value)
    {
        if (!$value instanceof Zone) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Zone
     */
    protected function mapper()
    {
        return function (?int $index): ?Zone {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Zone $data */
                $data = ZoneModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
