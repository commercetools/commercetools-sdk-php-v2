<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ZoneResourceIdentifier>
 * @method ZoneResourceIdentifier current()
 * @method ZoneResourceIdentifier at($offset)
 */
class ZoneResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ZoneResourceIdentifier $value
     * @psalm-param ZoneResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ZoneResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ZoneResourceIdentifier $data */
                $data = ZoneResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
