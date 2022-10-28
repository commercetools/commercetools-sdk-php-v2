<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryChangeParentActionModel extends JsonObjectModel implements CategoryChangeParentAction
{
    public const DISCRIMINATOR_VALUE = 'changeParent';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CategoryResourceIdentifier
     */
    protected $parent;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CategoryResourceIdentifier $parent = null,
        ?string $action = null
    ) {
        $this->parent = $parent;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set as parent.</p>
     *
     *
     * @return null|CategoryResourceIdentifier
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT);
            if (is_null($data)) {
                return null;
            }

            $this->parent = CategoryResourceIdentifierModel::of($data);
        }

        return $this->parent;
    }


    /**
     * @param ?CategoryResourceIdentifier $parent
     */
    public function setParent(?CategoryResourceIdentifier $parent): void
    {
        $this->parent = $parent;
    }
}
