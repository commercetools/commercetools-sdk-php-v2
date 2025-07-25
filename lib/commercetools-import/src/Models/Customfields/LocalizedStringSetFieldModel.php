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
use Commercetools\Import\Models\Common\LocalizedStringCollection;
use stdClass;

/**
 * @internal
 */
final class LocalizedStringSetFieldModel extends JsonObjectModel implements LocalizedStringSetField
{
    public const DISCRIMINATOR_VALUE = 'LocalizedStringSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?LocalizedStringCollection
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedStringCollection $value = null,
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
     * <p>JSON array of localized strings.
     * The order of items in the array is not fixed.</p>
     *
     *
     * @return null|LocalizedStringCollection
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = LocalizedStringCollection::fromArray($data);
        }

        return $this->value;
    }


    /**
     * @param ?LocalizedStringCollection $value
     */
    public function setValue(?LocalizedStringCollection $value): void
    {
        $this->value = $value;
    }
}
