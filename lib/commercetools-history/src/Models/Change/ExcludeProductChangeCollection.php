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
 * @extends ChangeCollection<ExcludeProductChange>
 * @method ExcludeProductChange current()
 * @method ExcludeProductChange end()
 * @method ExcludeProductChange at($offset)
 */
class ExcludeProductChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ExcludeProductChange $value
     * @psalm-param ExcludeProductChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExcludeProductChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExcludeProductChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExcludeProductChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ExcludeProductChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExcludeProductChange $data */
                $data = ExcludeProductChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
