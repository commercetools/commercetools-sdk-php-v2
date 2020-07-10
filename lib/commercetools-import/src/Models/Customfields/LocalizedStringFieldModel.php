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

use Models\Common\LocalizedString;
use Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class LocalizedStringFieldModel extends JsonObjectModel implements LocalizedStringField
{
    public const DISCRIMINATOR_VALUE = 'LocalizedString';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?LocalizedString
     */
    protected $value;


    public function __construct(
        LocalizedString $value = null
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
     * @return null|LocalizedString
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LocalizedStringField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = LocalizedStringModel::of($data);
        }

        return $this->value;
    }

    public function setValue(?LocalizedString $value): void
    {
        $this->value = $value;
    }



}
