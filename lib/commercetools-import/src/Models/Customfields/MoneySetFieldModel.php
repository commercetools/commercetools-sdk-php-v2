<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Common\MoneyCollection;

/**
 * @internal
 */
final class MoneySetFieldModel extends JsonObjectModel implements MoneySetField
{
    public const DISCRIMINATOR_VALUE = 'MoneySet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?MoneyCollection
     */
    protected $value;


    public function __construct(
        MoneyCollection $value = null
    ) {
        $this->value = $value;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The type of this field.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomField::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|MoneyCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(MoneySetField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = MoneyCollection::fromArray($data);
        }

        return $this->value;
    }

    public function setValue(?MoneyCollection $value): void
    {
        $this->value = $value;
    }



}
