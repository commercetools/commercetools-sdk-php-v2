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
use Commercetools\Import\Models\Common\TypedMoneyCollection;
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
     * @var ?TypedMoneyCollection
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoneyCollection $value = null,
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
     * <p>JSON array of money values in cent precision format.
     * The order of items in the array is not fixed.</p>
     *
     *
     * @return null|TypedMoneyCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = TypedMoneyCollection::fromArray($data);
        }

        return $this->value;
    }


    /**
     * @param ?TypedMoneyCollection $value
     */
    public function setValue(?TypedMoneyCollection $value): void
    {
        $this->value = $value;
    }
}
