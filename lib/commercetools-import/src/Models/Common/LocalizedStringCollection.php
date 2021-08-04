<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LocalizedString>
 * @method LocalizedString current()
 * @method LocalizedString end()
 * @method LocalizedString at($offset)
 */
class LocalizedStringCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizedString $value
     * @psalm-param LocalizedString|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedStringCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedString) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedString
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizedString {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizedString $data */
                $data = LocalizedStringModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
