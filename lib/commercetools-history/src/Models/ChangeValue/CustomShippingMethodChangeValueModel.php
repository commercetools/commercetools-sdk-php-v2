<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomShippingMethodChangeValueModel extends JsonObjectModel implements CustomShippingMethodChangeValue
{


    /**
     *
     * @var ?string
     */
    protected $name;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null
    ) {
        $this->name = $name;

    }

    /**
     * <p>Name of the Custom ShippingMethod.</p>
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
