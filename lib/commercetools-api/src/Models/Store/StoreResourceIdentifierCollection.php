<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<StoreResourceIdentifier>
 * @method StoreResourceIdentifier current()
 * @method StoreResourceIdentifier at($offset)
 */
class StoreResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert StoreResourceIdentifier $value
     * @psalm-param StoreResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?StoreResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreResourceIdentifier $data */
                $data = StoreResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
