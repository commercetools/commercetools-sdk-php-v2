<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ZoneReference>
 * @method ZoneReference current()
 * @method ZoneReference end()
 * @method ZoneReference at($offset)
 */
class ZoneReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ZoneReference $value
     * @psalm-param ZoneReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ZoneReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneReference $data */
                $data = ZoneReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
