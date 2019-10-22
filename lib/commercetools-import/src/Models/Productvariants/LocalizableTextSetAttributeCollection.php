<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LocalizableTextSetAttribute>
 *
 * @method LocalizableTextSetAttribute current()
 * @method LocalizableTextSetAttribute at($offset)
 */
class LocalizableTextSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizableTextSetAttribute $value
     * @psalm-param LocalizableTextSetAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return LocalizableTextSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizableTextSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizableTextSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?LocalizableTextSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizableTextSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
