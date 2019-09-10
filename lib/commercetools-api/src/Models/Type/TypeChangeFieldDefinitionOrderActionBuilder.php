<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeChangeFieldDefinitionOrderAction>
 */
final class TypeChangeFieldDefinitionOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $fieldNames;

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
     * @return null|array
     */
    public function getFieldNames()
    {
        return $this->fieldNames;
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
    public function withFieldNames(?array $fieldNames)
    {
        $this->fieldNames = $fieldNames;

        return $this;
    }

    public function build(): TypeChangeFieldDefinitionOrderAction
    {
        return new TypeChangeFieldDefinitionOrderActionModel(
            $this->action,
            $this->fieldNames
        );
    }

    public static function of(): TypeChangeFieldDefinitionOrderActionBuilder
    {
        return new self();
    }
}
