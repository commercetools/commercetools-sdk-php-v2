<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<NewMasterVariantAdditionNotAllowedError>
 * @method NewMasterVariantAdditionNotAllowedError current()
 * @method NewMasterVariantAdditionNotAllowedError end()
 * @method NewMasterVariantAdditionNotAllowedError at($offset)
 */
class NewMasterVariantAdditionNotAllowedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert NewMasterVariantAdditionNotAllowedError $value
     * @psalm-param NewMasterVariantAdditionNotAllowedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NewMasterVariantAdditionNotAllowedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof NewMasterVariantAdditionNotAllowedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NewMasterVariantAdditionNotAllowedError
     */
    protected function mapper()
    {
        return function (?int $index): ?NewMasterVariantAdditionNotAllowedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NewMasterVariantAdditionNotAllowedError $data */
                $data = NewMasterVariantAdditionNotAllowedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
