<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodChangeActiveActionModel extends JsonObjectModel implements ShippingMethodChangeActiveAction
{
    public const DISCRIMINATOR_VALUE = 'changeActive';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $active;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $active = null,
        ?string $action = null
    ) {
        $this->active = $active;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.</p>
     * <p>If set to <code>false</code>, the ShippingMethod cannot be used during the creation or update of a Cart or Order.</p>
     *
     *
     * @return null|bool
     */
    public function getActive()
    {
        if (is_null($this->active)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ACTIVE);
            if (is_null($data)) {
                return null;
            }
            $this->active = (bool) $data;
        }

        return $this->active;
    }


    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }
}
