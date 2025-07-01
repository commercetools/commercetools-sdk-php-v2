<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentMethodDefaultSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodDefaultSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodDefaultSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?bool
     */
    protected $default;

    /**
     *
     * @var ?bool
     */
    protected $oldDefault;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $default = null,
        ?bool $oldDefault = null,
        ?string $type = null
    ) {
        $this->default = $default;
        $this->oldDefault = $oldDefault;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Default Payment Method after the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
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
     * <p>Default Payment Method before the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
     *
     *
     * @return null|bool
     */
    public function getOldDefault()
    {
        if (is_null($this->oldDefault)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_OLD_DEFAULT);
            if (is_null($data)) {
                return null;
            }
            $this->oldDefault = (bool) $data;
        }

        return $this->oldDefault;
    }


    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void
    {
        $this->default = $default;
    }

    /**
     * @param ?bool $oldDefault
     */
    public function setOldDefault(?bool $oldDefault): void
    {
        $this->oldDefault = $oldDefault;
    }
}
