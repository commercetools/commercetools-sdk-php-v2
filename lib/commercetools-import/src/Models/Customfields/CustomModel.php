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
use Commercetools\Import\Models\Common\TypeKeyReference;
use Commercetools\Import\Models\Common\TypeKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class CustomModel extends JsonObjectModel implements Custom
{
    /**
     *
     * @var ?TypeKeyReference
     */
    protected $type;

    /**
     *
     * @var ?FieldContainer
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypeKeyReference $type = null,
        ?FieldContainer $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;
    }

    /**
     * <p>The <a href="ctp:api:type:Type">Type</a> that provides the field definitions for this object. If the referenced Type does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Type is created.</p>
     *
     *
     * @return null|TypeKeyReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeKeyReferenceModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>The Custom Fields of this object.</p>
     *
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?TypeKeyReference $type
     */
    public function setType(?TypeKeyReference $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
}
