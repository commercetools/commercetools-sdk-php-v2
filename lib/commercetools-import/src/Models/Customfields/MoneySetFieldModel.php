<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\MoneyCollection;
use stdClass;

/**
 * @internal
 */
final class MoneySetFieldModel extends JsonObjectModel implements MoneySetField
{
    public const DISCRIMINATOR_VALUE = 'MoneySet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?MoneyCollection
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?MoneyCollection $value = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
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
     *
     * @return null|MoneyCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = MoneyCollection::fromArray($data);
        }

        return $this->value;
    }


    /**
     * @param ?MoneyCollection $value
     */
    public function setValue(?MoneyCollection $value): void
    {
        $this->value = $value;
    }
}
