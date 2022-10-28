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
 * @implements Builder<TypeChangeFieldDefinitionOrderAction>
 */
final class TypeChangeFieldDefinitionOrderActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $fieldNames;

    /**
     * <p>Must match the set of <code>name</code>s of FieldDefinitions (up to order).</p>
     *

     * @return null|array
     */
    public function getFieldNames()
    {
        return $this->fieldNames;
    }

    /**
     * @param ?array $fieldNames
     * @return $this
     */
    public function withFieldNames(?array $fieldNames)
    {
        $this->fieldNames = $fieldNames;

        return $this;
    }


    public function build(): TypeChangeFieldDefinitionOrderAction
    {
        return new TypeChangeFieldDefinitionOrderActionModel(
            $this->fieldNames
        );
    }

    public static function of(): TypeChangeFieldDefinitionOrderActionBuilder
    {
        return new self();
    }
}
