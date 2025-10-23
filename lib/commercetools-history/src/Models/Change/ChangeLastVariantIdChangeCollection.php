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
 * @extends ChangeCollection<ChangeLastVariantIdChange>
 * @method ChangeLastVariantIdChange current()
 * @method ChangeLastVariantIdChange end()
 * @method ChangeLastVariantIdChange at($offset)
 */
class ChangeLastVariantIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLastVariantIdChange $value
     * @psalm-param ChangeLastVariantIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLastVariantIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLastVariantIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLastVariantIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLastVariantIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLastVariantIdChange $data */
                $data = ChangeLastVariantIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
