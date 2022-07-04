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
final class ShippingMethodChangeIsDefaultActionModel extends JsonObjectModel implements ShippingMethodChangeIsDefaultAction
{
    public const DISCRIMINATOR_VALUE = 'changeIsDefault';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $isDefault;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $isDefault = null
    ) {
        $this->isDefault = $isDefault;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>Value to set. Only one ShippingMethod can be default in a <a href="ctp:api:type:Project">Project</a>.</p>
     *
     * @return null|bool
     */
    public function getIsDefault()
    {
        if (is_null($this->isDefault)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->isDefault = (bool) $data;
        }

        return $this->isDefault;
    }


    /**
     * @param ?bool $isDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }
}
