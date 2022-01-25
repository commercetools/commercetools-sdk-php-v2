<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelSetAddressCustomFieldAction extends ChannelUpdateAction
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * <p>Name of the Custom Fields.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Specifies the format of the value of the Custom Field defined by <code>name</code>.
     * If <code>value</code> is absent or <code>null</code>, this field will be removed, if it exists. Trying to remove a field that does not exist will fail with an <a href="/../api/errors#general-400-invalid-operation">InvalidOperation</a> error.</p>
     *
     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
