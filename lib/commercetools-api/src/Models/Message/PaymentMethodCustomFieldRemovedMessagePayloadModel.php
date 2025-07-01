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
final class PaymentMethodCustomFieldRemovedMessagePayloadModel extends JsonObjectModel implements PaymentMethodCustomFieldRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodCustomFieldRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $name;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $type = null
    ) {
        $this->name = $name;
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
     * <p>Name of the Custom Field that was removed.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
