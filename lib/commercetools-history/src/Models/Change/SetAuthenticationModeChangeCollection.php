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
 * @extends ChangeCollection<SetAuthenticationModeChange>
 * @method SetAuthenticationModeChange current()
 * @method SetAuthenticationModeChange end()
 * @method SetAuthenticationModeChange at($offset)
 */
class SetAuthenticationModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAuthenticationModeChange $value
     * @psalm-param SetAuthenticationModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAuthenticationModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAuthenticationModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAuthenticationModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAuthenticationModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAuthenticationModeChange $data */
                $data = SetAuthenticationModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
