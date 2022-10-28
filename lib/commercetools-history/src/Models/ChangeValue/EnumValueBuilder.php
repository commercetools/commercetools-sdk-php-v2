<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<EnumValue>
 */
final class EnumValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $label;

    /**

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**

     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
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

    /**
     * @param ?string $label
     * @return $this
     */
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }


    public function build(): EnumValue
    {
        return new EnumValueModel(
            $this->key,
            $this->label
        );
    }

    public static function of(): EnumValueBuilder
    {
        return new self();
    }
}
