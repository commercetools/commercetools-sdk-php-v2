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
use Commercetools\Import\Models\Common\KeyReference;

use Commercetools\Import\Models\Common\KeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ReferenceFieldModel extends JsonObjectModel implements ReferenceField
{
    public const DISCRIMINATOR_VALUE = 'Reference';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?KeyReference
     */
    protected $value;


    public function __construct(
        KeyReference $value = null
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
     * <p>References a resource by its key.</p>
     *
     * @return null|KeyReference
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReferenceField::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = KeyReferenceModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    public function setValue(?KeyReference $value): void
    {
        $this->value = $value;
    }
}
