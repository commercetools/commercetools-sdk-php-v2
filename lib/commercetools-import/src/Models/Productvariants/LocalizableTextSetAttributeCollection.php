<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @extends AttributeCollection<LocalizableTextSetAttribute>
 * @method LocalizableTextSetAttribute current()
 * @method LocalizableTextSetAttribute end()
 * @method LocalizableTextSetAttribute at($offset)
 */
class LocalizableTextSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert LocalizableTextSetAttribute $value
     * @psalm-param LocalizableTextSetAttribute|stdClass $value
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
        return function (?int $index): ?LocalizableTextSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizableTextSetAttribute $data */
                $data = LocalizableTextSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
