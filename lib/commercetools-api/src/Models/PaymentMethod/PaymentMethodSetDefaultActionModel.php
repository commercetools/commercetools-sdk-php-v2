<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodSetDefaultActionModel extends JsonObjectModel implements PaymentMethodSetDefaultAction
{
    public const DISCRIMINATOR_VALUE = 'setDefault';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $default;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $default = null,
        ?string $action = null
    ) {
        $this->default = $default;
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
     *
     *
     * @return null|bool
     */
    public function getDefault()
    {
        if (is_null($this->default)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->default = (bool) $data;
        }

        return $this->default;
    }


    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void
    {
        $this->default = $default;
    }
}
