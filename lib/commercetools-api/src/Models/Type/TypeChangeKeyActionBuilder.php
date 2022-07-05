<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypeChangeKeyAction>
 */
final class TypeChangeKeyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): TypeChangeKeyAction
    {
        return new TypeChangeKeyActionModel(
            $this->key
        );
    }

    public static function of(): TypeChangeKeyActionBuilder
    {
        return new self();
    }
}
