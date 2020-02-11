<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExternalOAuth>
 * @method ExternalOAuth current()
 * @method ExternalOAuth at($offset)
 */
class ExternalOAuthCollection extends MapperSequence
{
    /**
     * @psalm-assert ExternalOAuth $value
     * @psalm-param ExternalOAuth|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExternalOAuthCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExternalOAuth) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExternalOAuth
     */
    protected function mapper()
    {
        return function (int $index): ?ExternalOAuth {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExternalOAuthModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
