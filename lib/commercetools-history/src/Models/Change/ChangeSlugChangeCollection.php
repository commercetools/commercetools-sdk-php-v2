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
 * @extends ChangeCollection<ChangeSlugChange>
 * @method ChangeSlugChange current()
 * @method ChangeSlugChange at($offset)
 */
class ChangeSlugChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeSlugChange $value
     * @psalm-param ChangeSlugChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSlugChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSlugChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSlugChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeSlugChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeSlugChange $data */
                $data = ChangeSlugChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
