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
 * @implements Builder<TypeChangeInputHintAction>
 */
final class TypeChangeInputHintActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var ?string
     */
    private $inputHint;

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">Field Definition</a> to update.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *

     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * @param ?string $fieldName
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @param ?string $inputHint
     * @return $this
     */
    public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;

        return $this;
    }


    public function build(): TypeChangeInputHintAction
    {
        return new TypeChangeInputHintActionModel(
            $this->fieldName,
            $this->inputHint
        );
    }

    public static function of(): TypeChangeInputHintActionBuilder
    {
        return new self();
    }
}
