<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypeRemoveFieldDefinitionAction>
 */
final class TypeRemoveFieldDefinitionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $fieldName;

    /**
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }


    public function build(): TypeRemoveFieldDefinitionAction
    {
        return new TypeRemoveFieldDefinitionActionModel(
            $this->fieldName
        );
    }

    public static function of(): TypeRemoveFieldDefinitionActionBuilder
    {
        return new self();
    }
}
