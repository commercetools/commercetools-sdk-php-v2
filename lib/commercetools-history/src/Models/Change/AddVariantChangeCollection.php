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
 * @extends ChangeCollection<AddVariantChange>
 * @method AddVariantChange current()
 * @method AddVariantChange end()
 * @method AddVariantChange at($offset)
 */
class AddVariantChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddVariantChange $value
     * @psalm-param AddVariantChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddVariantChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddVariantChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddVariantChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddVariantChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddVariantChange $data */
                $data = AddVariantChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
