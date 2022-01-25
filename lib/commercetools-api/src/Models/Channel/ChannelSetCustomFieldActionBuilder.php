<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelSetCustomFieldAction>
 */
final class ChannelSetCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|mixed|mixed
     */
    private $value;

    /**
     * <p>Name of the Custom Field.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Value must be of type <a href="/../api/projects/custom-fields#value">Value</a>.
     * If <code>value</code> is absent or <code>null</code>, this field will be removed, if it exists.
     * Trying to remove a field that does not exist will fail with an <a href="/../api/errors#general-400-invalid-operation">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is for the field defined by <code>name</code>.</p>
     *
     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): ChannelSetCustomFieldAction
    {
        return new ChannelSetCustomFieldActionModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): ChannelSetCustomFieldActionBuilder
    {
        return new self();
    }
}
