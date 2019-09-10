<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeRemoveFieldDefinitionAction>
 */
final class TypeRemoveFieldDefinitionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $fieldName;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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
            $this->action,
            $this->fieldName
        );
    }

    public static function of(): TypeRemoveFieldDefinitionActionBuilder
    {
        return new self();
    }
}
