<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Common\ClientLoggingCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ClientLoggingCollection<CreatedBy>
 * @method CreatedBy current()
 * @method CreatedBy at($offset)
 */
class CreatedByCollection extends ClientLoggingCollection
{
    /**
     * @psalm-assert CreatedBy $value
     * @psalm-param CreatedBy|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CreatedByCollection
     */
    public function add($value)
    {
        if (!$value instanceof CreatedBy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CreatedBy
     */
    protected function mapper()
    {
        return function (int $index): ?CreatedBy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CreatedBy $data */
                $data = CreatedByModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
