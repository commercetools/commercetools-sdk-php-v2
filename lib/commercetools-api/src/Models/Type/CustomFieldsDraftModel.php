<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class CustomFieldsDraftModel extends JsonObjectModel implements CustomFieldsDraft
{
    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     * @var ?FieldContainer
     */
    protected $fields;


    public function __construct(
        TypeResourceIdentifier $type = null,
        FieldContainer $fields = null
    ) {
        $this->type = $type;
        $this->fields = $fields;
    }

    /**
     * <p>The <code>id</code> or the <code>key</code> of the type to use.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFieldsDraft::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>A valid JSON object, based on the FieldDefinitions of the Type.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CustomFieldsDraft::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
}
